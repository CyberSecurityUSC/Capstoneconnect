@extends('layouts.masterlogin')

@section('title')
@parent
@stop

@section('header')
<h1>Capstone Connect</h1>
@stop

@section('styles')
@stop

@section('content')
<div class = Login>
	<p></p>
	@if (Session::has('error'))
  		{{ trans(Session::get('reason')) }}
	@endif
 
	{{ Form::open(array('route' => array('password.update', $token))) }}
 
  	<p>{{ Form::label('email', 'Email') }}
  		{{ Form::text('email', Input::old('email'), array('placeholder' => 'admin@sc.edu')) }}
  	</p>
 
  	<p>{{ Form::label('password', 'Password') }}
  		{{ Form::text('password') }}</p>
 
	<p>{{ Form::label('password_confirmation', 'Password confirm') }}
  		{{ Form::text('password_confirmation') }}</p>
 
  	{{ Form::hidden('token', $token) }}
 
  	<p>{{ Form::submit('Submit') }}</p>
 
	{{ Form::close() }}
</div>
@stop