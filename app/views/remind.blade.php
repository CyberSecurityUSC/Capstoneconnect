@extends('layouts.masterlogin')

@section('title')
@parent
@stop

@section('header')
<h1><b>Capstone Connect</b></h1>
@stop

@section('styles')
@stop

@section('content')
<div class = Login>
  <p></p>
  <!-- Form to enter email address to send a link to reset password-->
  
  <!-- Check if there was an error and display reason -->
	@if (Session::has('error'))
  		{{ trans(Session::get('reason')) }}
	@elseif (Session::has('success'))
  		An email to reset your password has been sent.
      Please check your inbox or junk/spam.
	@endif
 
	{{ Form::open(array('route' => 'request')) }}
	@if (!Session::has('success'))
 	  <p> Enter email.sc.edu email address associated with your account to reset password </p>
 	
  	<p>{{ Form::label('email', 'Email') }}
  	{{ Form::text('email', Input::old('email'), array('placeholder' => 'username@email.sc.edu')) }}	
  	</p>
 	
  	<p>{{ Form::submit('Submit') }}</p>
  @endif

  @if (Session::has('success'))
    {{ HTML::link('login', 'Click here to return to login page', array('class' => 'blue'))}}
 	@endif
	{{ Form::close() }}
</div>
@stop