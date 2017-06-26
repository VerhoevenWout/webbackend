@extends('layouts.main')

@section('content')
	@foreach($errors->all() as $error)
		<p class="error">{{$error}}</p>
	@endforeach

	{!! Form::open(array('autocomplete'=>'off')) !!}
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" value="SignIn">
	{!! Form::close() !!}
@stop