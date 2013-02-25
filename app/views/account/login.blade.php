@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
:: Account Login
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Login into your account</h1>
</div>
<form method="post" action="" class="form-horizontal">
	<!-- CSRF Token -->
	<input type="hidden" name="csrf_token" id="csrf_token" value="{{ Session::getToken() }}" />

	<!-- Email -->
	<div class="control-group {{ $errors->has('email') ? 'error' : '' }}">
		<label class="control-label" for="email">Email</label>
		<div class="controls">
			<input type="text" name="email" id="email" value="{{ Input::old('email') }}" />
			{{{ $errors->first('email') }}}
		</div>
	</div>
	<!-- ./ email -->

	<!-- Password -->
	<div class="control-group {{ $errors->has('password') ? 'error' : '' }}">
		<label class="control-label" for="password">Password</label>
		<div class="controls">
			<input type="password" name="password" id="password" value="" />
			{{{ $errors->first('password') }}}
		</div>
	</div>
	<!-- ./ password -->

	<!-- Login button -->
	<div class="control-group">
               <div class="controls">
                  <button type="submit" class="btn">Login</button>
               </div>
               <div class="controls">
                  <br /> <span class="label">Or Login with  </span>
               </div>
               <div class="controls">
                  <br />
                  <a href="/social/auth/facebook" class="btn"><img src="{{ asset('assets/img/social/facebook.png') }}" alt="Facebook"></a>&nbsp;&nbsp;&nbsp;
              <!--    <a href="/social/auth/twitter" class="btn"><img src="{{ asset('assets/img/social/twitter.png') }}" alt="Twitter"></a>&nbsp;&nbsp;&nbsp; -->
                  <a href="/social/auth/google" class="btn"><img src="{{ asset('assets/img/social/google.png') }}" alt="Google"></a> 
               </div>
	</div>
	<!-- ./ login button -->
</form>
@stop
