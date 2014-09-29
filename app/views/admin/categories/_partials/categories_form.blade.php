<div class="form-group">
	{{Form::label('name')}}
	{{Form::text('name', null, ['class'=>'form-control'])}}
	{{$errors->first('name', '<p class="error">:message</p>')}}
</div>
	{{Form::submit('Save Category', ['class'=>'btn btn-primary'])}}