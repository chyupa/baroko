@extends('admin.layouts.master')

@section('content')
	{{ Form::open(['route'=>'admin.posts.store', 'files'=>true]) }}
		@include('admin.posts._partials.form')
	{{ Form::close() }}
@stop