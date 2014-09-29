@extends('admin.layouts.master')

@section('content')
	{{Form::model($subcategory, array( 'route' => array('admin.subcategories.update', $subcategory->id), 'method' => 'put') )}}
		@include('admin.subcategories._partials.form')
	{{Form::close()}}
@stop