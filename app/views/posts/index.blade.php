@extends('layouts.default')

@section('title')
<title>Post</title>
@stop

{{-- Content --}}
@section('container')
    
    <div class="row">
        <div class="col-lg-8">
		    @if ($posts->count())

			    @if($query)
				    <h4>{{$posts->count()}} {{ \Illuminate\Support\Pluralizer::plural('result', $posts->count()) }} for {{$query}}</h4>
				    <hr>
			    @endif

	            @include('layouts.entrypreview')

			@else
			<p>No posts matching {{$query}}</p>

			@endif

        </div>

        @include('layouts.wells')
        
    </div>

    <hr />

@stop
