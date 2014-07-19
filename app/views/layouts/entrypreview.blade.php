    <!-- Blog entry -->
    @foreach ($posts as $post)

    <article>

        <!-- Post Title -->    
        <h2>
            <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
        </h2>

        <p class="lead">by <a href="{{ route('author.show', $post->author_id) }}">{{ $post->author['name'] }}</a>
        </p>
        <hr>
        <p>
            <span class="glyphicon glyphicon-time"></span> Posted on {{date("F nS\, Y \a\\t g:i a",strtotime($post->created_at))}}
            &nbsp;
            <span class="glyphicon glyphicon-tags"></span>&nbsp; Tags: 
            @foreach ($post->tags as $tag)
            <a href="{{ route('tag.show',$tag->id) }}">{{ $tag->name }}</a>
            @endforeach</p>
        <hr>
        <img src="http://placehold.it/900x300" class="img-responsive">
        <hr>
        <p>{{ str_finish(Str::limit($post->body, 200),'..') }}</p>
        <a class="btn btn-primary" href="{{ route('post.show', $post->id) }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
        <a class="btn btn-primary" href="#">{{$post->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $post->comments()->count()) }} <span class="glyphicon glyphicon-comment"></span></a>

        <hr>

    </article>
    <!-- End of blog entry -->
    @endforeach

    {{ $posts->appends(Request::except('page'))->links() }}