@extends('layouts.minimal.default')

@section('title')
<title>Post</title>
@stop

@section('header')
<style body {margin-top: 0px;}></style>
@stop

{{-- Content --}}
@section('container')

<h1 class="text-center">Matt Mitchener</h1>

@if ($posts->count())

    @if($query)
	    <h4>{{$posts->count()}} {{ \Illuminate\Support\Pluralizer::plural('result', $posts->count()) }} for {{$query}}</h4>
	    <hr>
    @endif

    @include('layouts.minimal.preview')

@else
<p>No posts matching {{$query}}</p>

@endif

    <hr />

@stop
