@extends('layouts.default')

@section('title')
<title>{{ $author->name }}</title>
@stop

{{-- Content --}}
@section('container')

<div class="row">
	<div class="col-lg-8">

	</div>

	@include('well')
</div>
@stop