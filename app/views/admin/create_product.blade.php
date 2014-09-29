@extends('admin.layouts.master')
@extends('admin.layouts.menu')

@section('content')
	<h1>Create Product</h1>
	<div class="col-md-6">
		{{Form::open(['route'=>'create-product'])}}
			<div class="form-group">
				{{Form::label('name', 'Product name')}}
				{{Form::text('name', null, ['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('category', 'Choose product category')}}
				{{Form::select('category', ['1'=>'Categorie 1', '2'=>'Categorie 2', '3'=>'Categorie 3'], ['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('subcategory', 'Choose product subcategory')}}
				{{Form::select('subcategory', ['1'=>'SubCategorie 1', '2'=>'SubCategorie 2', '3'=>'SubCategorie 3'], ['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('price', 'Product Price')}}
				{{Form::text('price', null, ['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('image', 'Product Image')}}
				{{Form::file('image', ['class'=>'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('description', 'Product Description')}}
				{{Form::textarea('description', null, ['class'=>'form-control', 'rows'=>3])}}
			</div>
			<div class="form-group">
				{{Form::label('is_featured', 'Product Price')}}
				{{Form::checkbox('is_featured', '1', false)}}
			</div>
			<div class="form-group">
				{{Form::checkbox('public', '1', true)}}
				{{Form::label('public', 'Public')}}
			</div>
			<div class="form-group">
				{{Form::label('outlet', 'Outlet')}}
				{{Form::checkbox('outlet', '1', false)}}
			</div>
			{{Form::submit('Create Product', ['class'=>'btn btn-primary'])}}
		{{Form::close()}}
	</div>
@stop