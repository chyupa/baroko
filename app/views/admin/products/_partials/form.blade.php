<div class="form-group">
	{{ Form::label('type', 'Choose Product Type') }}
	{{ Form::select('type', $type, 0, ['class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('name', 'Product Name') }}
	{{ Form::text('name', null, ['class'=>'form-control'] ) }}
	{{ $errors->first('name', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
	{{ Form::label('filename', 'Choose File') }}
	{{ Form::file('filename', ['class'=>'form-control']) }}
	{{ $errors->first('filename', '<p class="error">:message</p>') }}
</div>
<div class="row">
	@if(isset($files))
		@foreach($files as $file)
			<div class="col-md-3 file{{$file->id}}">
				<img class="img-responsive" title="{{$file->filename}}" src="{{'/uploads/' . $file->product_id . '/' . $file->filename}}" />
				{{ Form::button('Delete Photo', ['class'=>'btn btn-warning delete-photo', 'data-fileid' => $file->id]) }}
			</div>
		@endforeach
	@endif
</div>
<div class="form-group">
	{{ Form::label('categ_id', 'Category') }}
	{{ Form::select('categ_id', $categories, null, ['class'=>'form-control']) }}
	{{ $errors->first('categ_id', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
	{{ Form::label('ext', 'Extensie') }}
	{{ Form::select('ext', $ext, null, ['class'=>'form-control']) }}
	{{ $errors->first('ext', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
	{{ Form::label('price', 'Price') }}
	{{ Form::text('price', null, ['class'=>'form-control']) }}
	{{ $errors->first('price', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
	{{ Form::label('description') }}
	{{ Form::textarea('description', null, ['class'=>'form-control', 'rows'=>3]) }}
	{{ $errors->first('description', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
	{{ Form::label('featured', 'Is Featured?') }}
	{{ Form::checkbox('featured', 1) }}
</div>
<div class="form-group">
	{{ Form::label('public', 'Is Public?') }}
	{{ Form::checkbox('public', 1) }}
</div>
<div class="form-group">
	{{ Form::label('outlet', 'Is Outlet') }}
	{{ Form::checkbox('outlet', 1) }}
</div>
<div class="form-group">
	{{ Form::label('cant_outlet', 'Outlet quantity') }}
	{{ Form::text('cant_outlet', null, ['class'=>'form-control']) }}
	{{ $errors->first('cant_outlet', '<p class="error">:message</p>') }}
</div>
{{ Form::submit('Save Product', ['class'=>'btn btn-primary'])}} 