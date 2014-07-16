@extends('layouts.default')

@section('title')
<title>Home</title>
@stop

{{-- Content --}}
@section('container')
    
    <div class="row">
        <div class="col-lg-8">

            <!-- Blog entry -->
            @foreach ($posts as $post)

            <!-- Post Title -->
            <h1><a href="#">{{ $post->title }}</a>
            </h1>

            <p class="lead">by <a href="index.php">{{$post->author}}</a>
            </p>
            <hr>
            <p>
                <span class="glyphicon glyphicon-time"></span> Posted on {{date("F nS\, Y \a\\t g:i a",strtotime($post->created_at))}}
                &nbsp;
                <span class="glyphicon glyphicon-tags"></span>&nbsp; Tags: 
                @foreach ($post->tags as $tag)
                <a href="#">{{$tag->name}}</a>
                @endforeach</p>
            <hr>
            <img src="http://placehold.it/900x300" class="img-responsive">
            <hr>
            <p>{{ $post->body }}</p>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
            <a class="btn btn-primary" href="#">{{$post->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $post->comments()->count()) }} <span class="glyphicon glyphicon-comment"></span></a>

            <hr>

            @endforeach
            <!-- End of blog entry -->

            <!-- pager -->
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a>
                </li>
                <li class="next"><a href="#">Newer &rarr;</a>
                </li>
            </ul>
		</div>

        <div class="col-lg-4">
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </div>
            <!-- /well -->
            <div class="well">
                <h4>Tags</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            @foreach ($tags as $tag)
                            <li><a href="#">{{$tag->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Bootstrap's default wells work great for side widgets! What is a widget anyways...?</p>
            </div>
            <!-- /well -->
        </div>
	</div>

	<hr />

@stop
