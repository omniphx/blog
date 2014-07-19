@extends('layouts.default')

@section('title')
<title>Tags</title>
@stop

{{-- Content --}}
@section('container')

<div class="row">
	<div class="col-lg-8">
		<h2>Tags:</h2>
		<ul class="list-unstyled">
			@foreach ($tags as $tag)
			<li>
				<a href="{{ route('tag.show', $tag->id) }}">{{ $tag->name }}</a>
			</li>
			@endforeach
		</ul>
	</div>

	@include('layouts.wells')
</div>
@stop