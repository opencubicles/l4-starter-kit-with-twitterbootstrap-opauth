<?php

class SocialController extends BaseController {

       public function auth($network)
       {
          $config = Config::get('opauth');

          $Opauth = new Opauth($config, TRUE);
       }

       public function callback()
       {

          $config = Config::get('opauth');

          $Opauth = new Opauth($config, FALSE);

          if (!session_id()) {
             session_start();
          }

          $response = (isset($_SESSION['opauth']) ? $_SESSION['opauth'] : array());

          $err_msg = null;

          unset($_SESSION['opauth']);

          if (array_key_exists('error', $response)) {
             $err_msg = 'Authentication error:  Opauth returns error auth response.';
          } else {
             if (empty($response['auth']) || empty($response['timestamp']) || empty($response['signature']) || empty($response['auth']['provider']) || empty($response['auth']['uid'])) {
                $err_msg = 'Invalid auth response: Missing key auth response components.';
             } elseif (!$Opauth->validate(sha1(print_r($response['auth'], true)), $response['timestamp'], $response['signature'], $reason)) {
                $err_msg = 'Invalid auth response: ' . $reason;
             }
          }

          if ($err_msg)
             return Redirect::to('account/login')->with('error', $err_msg);
          else {
             $authentication = new Authentication;
             $authentication->provider = $response['auth']['provider'];
             $authentication->provider_uid = $response['auth']['uid'];

             $authentication_exist = Authentication::where('provider', '=', $authentication->provider)->where('provider_uid', '=', $authentication->provider_uid)->first();

             if (!$authentication_exist) {
                if (Auth::check()) {
                   $user = Auth::user();
                   $authentication->user_id = $user->id;                  
                } else {
                   $user = new User;
                   $user->save();
                   $authentication->user_id = $user->id;
                }
                $authentication->save();
             }
             else
                $user = User::where('id', '=', $authentication_exist->user_id)->first();

             Auth::login($user);
             
             return Redirect::to('/');
          }
       }
}