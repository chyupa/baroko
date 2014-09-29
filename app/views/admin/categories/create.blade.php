@extends('admin.layouts.master')

@section('content')
	<h1>Create Category</h1>
	{{Form::open(array('route'=>'admin.categories.store'))}}
		@include('admin.categories._partials.categories_form')
	{{Form::close()}}
@stop