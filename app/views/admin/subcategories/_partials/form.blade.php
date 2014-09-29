<div class="form-group">
	{{Form::label('name')}}
	{{Form::text('name', null, ['class'=>'form-control'])}}
	{{$errors->first('name', '<p class="error">:message</p>')}}
</div>
<div class="form-group">
	{{Form::label('parent')}}
	{{Form::select('parent', $categories, $subcategory->parent, ['class' => 'form-control'])}}
	{{$errors->first('parent', '<p class="error">:message</p>')}}
</div>
	{{Form::submit('Save Subcategory', ['class'=>'btn btn-primary'])}}