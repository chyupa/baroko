@extends('admin.layouts.master')

@section('content')
	{{ Form::model($product, array('route' => array('admin.products.update', $product->id), 'method' => 'put', 'files'=>true)) }}
		@include('admin.products._partials.form')
	{{ Form::close() }}
@stop