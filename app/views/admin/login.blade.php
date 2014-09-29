@extends('admin.layouts.master')
@section('content')
	<h1 class="text-center">Login Form</h1>
	<div class="col-md-push-3 col-md-6 col-md-push-3">
		{{Form::open(array('route'=>'admin.post.login'))}}
			<div class="form-group">
				{{Form::label('username', 'Username')}}
				{{Form::text('username', null, array('class'=>'form-control'))}}
				{{$errors->first('username', '<p class="error">:message</p>')}}
			</div>
			<div class="form-group">
				{{Form::label('password', 'Password')}}
				{{Form::password('password', array('class'=>'form-control'))}}
				{{$errors->first('password', '<p class="error">:message</p>')}}
			</div>
			{{Form::submit('Login', array('class'=>'btn btn-primary'))}}
		{{Form::close()}}
	</div>
@stop