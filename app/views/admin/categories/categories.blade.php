@extends('admin.layouts.master')

@section('content')
	@if(count($categories))
		<ul>
			@foreach($categories as $cat)
				<li>
					{{ link_to_route('admin.categories.edit', $cat->name, array($cat->id)) }}
					{{ Form::open(array('route' => array('admin.categories.destroy', $cat->id), 'method' => 'delete', 'class' => 'destroy')) }}
					{{ Form::submit('Delete') }}
					{{ Form::close() }}
				</li>
			@endforeach
		</ul>
	@endif
@stop