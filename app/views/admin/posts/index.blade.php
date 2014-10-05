@extends('admin.layouts.master')

@section('content')
	@if(count($posts))
		<ul>
		@foreach($posts as $post)
			<li class="col-md-3">
				@if(isset($post->postsgallery->filename))
					<div>
						<img src="{{'/uploads/posts/'.$post->id.'/'.$post->postsgallery->filename}}" class="img-responsive">
					</div>
				@else
					<div class="col-md-3">
						<span class="glyphicon glyphicon-camera"></span>
					</div>
				@endif
				{{ link_to_route('admin.posts.edit', $post->name, array($post->id)) }}
				{{ Form::open(array('route' => array('admin.categories.destroy', $post->id), 'method' => 'delete', 'class' => 'destroy')) }}
				{{ Form::submit('Delete') }}
				{{ Form::close() }}
			</li>
		@endforeach
		</ul>
	@endif
@stop