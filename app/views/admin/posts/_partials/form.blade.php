<div class="form-group">
	{{ Form::label('name', 'Post Name') }}
	{{ Form::text('name', null, ['class'=>'form-control']) }}
	{{ $errors->first('name', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
	{{ Form::label('filename', 'Choose picture') }}
	{{ Form::file('filename', ['class'=>'form-control']) }}
	{{ $errors->first('filename', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
	{{ Form::label('content', 'Content') }}
	{{ Form::textarea('content', null, ['rows'=>5, 'class'=>'form-control']) }}
	{{ $errors->first('content', '<p class="error">:message</p>') }}
</div>
{{ Form::submit('Save', ['class'=>'btn btn-primary']) }}