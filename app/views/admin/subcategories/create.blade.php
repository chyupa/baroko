@extends('admin.layouts.master')

@section('content')
	{{Form::open(array('route' => 'admin.subcategories.store'))}}
		@include('admin.subcategories._partials.form')
	{{Form::close()}}
@stop