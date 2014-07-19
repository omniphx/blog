@extends('layouts.default')

@section('title')
<title>{{ $tag->name }}</title>
@stop

{{-- Content --}}
@section('container')

<div class="row">
	<div class="col-lg-8">

		<h1>Tag: {{ $tag->name }}</h1>

		@include('layouts.entrypreview')

	</div>

	@include('layouts.wells')

</div>
@stop