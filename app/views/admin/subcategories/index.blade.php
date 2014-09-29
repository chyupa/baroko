@extends('admin.layouts.master')

@section('content')
	<h1 class="text-left">Subcategories</h1>
	@if(count($subcategories))
		<ul>
			@foreach($subcategories as $sub)
				<li>
					{{ link_to_route('admin.subcategories.edit', $sub->name, array($sub->id)) }}
					{{ Form::open( array( 'route'=> array( 'admin.subcategories.destroy', $sub->id ), 'method'=>'delete', 'class'=>'btn btn-default' ) ) }}
						{{ Form::submit('Delete') }}
					{{ Form::close() }}
				</li>
			@endforeach
		</ul>
	@else
		<h1 class="text-center">No Subcategories Found</h1>
	@endif
@stop