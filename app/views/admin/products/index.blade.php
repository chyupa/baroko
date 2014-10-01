@extends('admin.layouts.master')

@section('content')
	@if(count($products))
		<ul>
			@foreach($products as $product)
				<li>
					{{ link_to_route('admin.products.edit', $product->name, array($product->id)) }}
				</li>
			@endforeach
		</ul>
	@else
		<h1 class="text-center">No Products found</h1>
	@endif
@stop