    <!-- Blog entry -->
    @foreach ($posts as $post)

    <article>
        <div class="row">
            <div class="col-sm-2">
                <div class="icon icon-{{$post->type->name}}">
                @if ($post->type->name == 'code')
                    <i class="fa fa-code fa-5x"></i>
                @elseif ($post->type->name == 'sports')
                    <i class="fa fa-dribbble fa-5x"></i>
                @elseif ($post->type->name == 'life')
                    <i class="fa fa-quote-right fa-5x"></i>
                @elseif ($post->type->name == 'sfdc')
                    <i class="fa fa-cloud fa-5x"></i>
                @endif
                </div>
            </div>
            <div class="col-sm-10">
                <h2>
                    <a class="link-{{$post->type->name}}" href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
                </h2>

                <p class="lead">by <a class="link-{{$post->type->name}}" href="{{ route('author.show', $post->author->slug) }}">{{ $post->author['name'] }}</a>
                </p>
                <hr>
                <p>
                    <span class="glyphicon glyphicon-time"></span> Posted on {{date("F nS\, Y \a\\t g:i a",strtotime($post->created_at))}}
                    &nbsp;
                    <span class="glyphicon glyphicon-tags"></span>&nbsp; Tags: 
                    @foreach ($post->tags as $tag)
                    <a class="link-{{$post->type->name}}" href="{{ route('tag.show',$tag->slug) }}">
                        {{ $tag->name }}
                    </a>
                    @endforeach</p>
                <hr>
                <p>{{ str_finish(Str::limit($post->body, 200),'..') }}</p>
                <a class="btn btn-primary" href="{{ route('post.show', $post->slug) }}">
                    Read More <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <a class="btn btn-primary" href="{{ route('post.show', $post->slug) }}#disqus_thread">
                </a>
            </div>
        </div>

        <hr>

    </article>
    <!-- End of blog entry -->
    @endforeach

    {{ $posts->appends(Request::except('page'))->links() }}