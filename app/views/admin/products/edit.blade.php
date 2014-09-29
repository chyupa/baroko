@extends('admin.layouts.master')

@section('content')
	{{ Form::model($product, array('route' => array('admin.products.update', $product->id), 'method' => 'put')) }}
		@include('admin.products._partials.product_form')
	{{ Form::close() }}
@stop