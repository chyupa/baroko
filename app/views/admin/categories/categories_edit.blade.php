@extends('admin.layouts.master')

@section('content')
	{{Form::model($category, array('route' => array( 'admin.categories.update', $category->id), 'method' => 'put'))}}
		@include('admin.categories._partials.categories_form')
	{{Form::close()}}
@stop