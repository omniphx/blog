@extends('layouts.default')

@section('title')
<title>{{ $post->title }}</title>
@stop

{{-- Content --}}
@section('container')

<div class="row">
	<div class="col-lg-8">
		<img src="http://placehold.it/900x300" class="img-responsive">
		<h1>{{$post->title}}</h1>
        <p class="lead">by <a href="index.php">{{$post->author->name}}</a>
        <p>
            <span class="glyphicon glyphicon-time"></span> Posted on {{date("F nS\, Y \a\\t g:i a",strtotime($post->created_at))}}
            &nbsp;
            <span class="glyphicon glyphicon-tags"></span>&nbsp; Tags: 
            @foreach ($post->tags as $tag)
            <a href="{{ route('tag.show',$tag->id) }}">{{ $tag->name }}</a>
            @endforeach</p>
        <hr>
        <p>{{ $post->body }}</p>

        <h3>Comments <small>{{ $post->comments->count() }}</small></h3>
        @foreach ($post->comments as $comment)
        	<div class="well">
        		{{ $comment->body }}
	        	<hr />
	        	By {{ $comment->name }} on {{date("F nS\, Y \a\\t g:i a",strtotime($comment->created_at))}}
        	</div>
        @endforeach

        <div class="well">
        	<h3>Add comment:</h3>
        	Name <input type="text">
        	Body <input type="text">
        	Submit <input type="submit">
        </div>

	</div>

	@include('layouts.wells')

</div>

@stop