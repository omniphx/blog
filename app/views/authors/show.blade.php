@extends('layouts.default')

@section('title')
<title>{{ $author->name }}</title>
@stop

{{-- Content --}}
@section('container')

<div class="row">
	<div class="col-lg-8">
		<h1>{{ $author->name }}'s Posts</h1>
		@include('layouts.entrypreview')
	</div>

	@include('layouts.wells')

</div>
@stop