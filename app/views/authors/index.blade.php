@extends('layouts.default')

@section('title')
<title>Authors</title>
@stop

{{-- Content --}}
@section('container')

<div class="row">
	<div class="col-lg-8">
		<h2>Authors:</h2>
		<ul class="list-unstyled">
			@foreach ($authors as $author)
			<li>
				<a href="{{ route('author.show', $author->id) }}">{{ $author->name }}</a>
			</li>
			@endforeach
		</ul>
	</div>

	@include('layouts.wells')
</div>
@stop