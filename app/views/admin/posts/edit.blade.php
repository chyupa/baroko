@extends('admin.layouts.master')

@section('content')
	{{Form::model($post, array('route' => array( 'admin.posts.update', $post->id), 'method' => 'put'))}}
		@include('admin.posts._partials.form')
	{{Form::close()}}
@stop