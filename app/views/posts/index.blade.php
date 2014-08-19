@extends('layouts.default')

@section('title')
<title>Post</title>
@stop

{{-- Content --}}
@section('container')

@include('layouts.header')
    
@if ($posts->count())

    @if($query)
	    <h4>{{$posts->count()}} {{ \Illuminate\Support\Pluralizer::plural('result', $posts->count()) }} for {{$query}}</h4>
	    <hr>
    @endif

    @include('layouts.preview')

@else
<p>No posts matching {{$query}}</p>

@endif

<hr />

@stop
