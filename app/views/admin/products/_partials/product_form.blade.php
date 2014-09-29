<div class="form-group">
	{{ Form::label('name', 'Product Name') }}
	{{ Form::text('name', null, ['class'=>'form-control'] ) }}
</div>
<div class="form-group">
	{{ Form::label('categ_id', 'Category') }}
	{{ Form::select('categ_id', $categories, 0, ['class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('ext', 'Extensie') }}
	{{ Form::select('ext', $ext, null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('description') }}
	{{ Form::textarea('description', null, ['class'=>'form-control', 'rows'=>3]) }}
</div>
{{ Form::submit('Save Product', ['class'=>'btn btn-primary'])}}