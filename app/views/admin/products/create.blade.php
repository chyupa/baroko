@extends('admin.layouts.master')

@section('content')
	{{ Form::open(array('route'=>'admin.products.store', 'files'=>true)) }}
		@include('admin.products._partials.form')
	{{ Form::close() }}
@stop