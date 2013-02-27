<?php

return array(

        /**
         * Path where Opauth is accessed.
         * 
         * Begins and ends with /
         * eg. if Opauth is reached via http://example.org/auth/, path is '/auth/'
         * if Opauth is reached via http://auth.example.org/, path is '/'
         */
    
        'path' => '/social/auth/',
    
        /**
         * Callback URL: redirected to after authentication, successful or otherwise
         */
	'callback_url' => URL::to('social/callback'),
    
        'callback_transport' => 'session',

	'security_salt' => 'LDFmiilYf8Fyw5W10rx4W1KsVrieQCnpBzzpdaddfggssssssssaaxzxxxxm',		

	'Strategy' => array(		
		
		'Facebook' => array(
			'app_id' => '109557205895999',
			'app_secret' => 'ea50cad9a55bb8f25fc373b02efcef08'                        
 		),
		
		'Google' => array(
			'client_id' => '302757129046.apps.googleusercontent.com',
			'client_secret' => 'GGJcIHhR5OH5hjn_G0LnsHJ8'
		),
		
		'Twitter' => array(
			'key' => 'pIL46LL8P6pxb1CgfcMXCw',
			'secret' => 'biyMKhKsxU1LVL2qUV1L06Xk2LuijpHaNl1TiZUw0'
		),
				
	)
);