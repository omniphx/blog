    <!-- Blog entry -->
    @foreach ($posts as $post)

    <article>
        <div class="row">
            <div class="col-md-2 hidden-sm hidden-xs">
                <div class="icon icon-{{$post->type->name}}">
                @if ($post->type->name == 'code')
                    <i class="fa fa-code fa-3x" title="Code"></i>
                @elseif ($post->type->name == 'sports')
                    <i class="fa fa-dribbble fa-3x"></i>
                @elseif ($post->type->name == 'life')
                    <i class="fa fa-quote-right fa-3x" title="Lifestyle"></i>
                @elseif ($post->type->name == 'sfdc')
                    <i class="fa fa-cloud fa-3x" title="Salesforce"></i>
                @endif
                </div>
            </div>
            <div class="col-md-10">
                <h4>
                    <a class="link-{{$post->type->name}}" href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
                </h4>

                <div>
                    <span class="glyphicon glyphicon-time"></span> Posted on {{date("F nS\, Y \a\\t g:i a",strtotime($post->created_at))}}
                </div>
            </div>
        </div>


    </article>
    <!-- End of blog entry -->
    @endforeach

    {{ $posts->appends(Request::except('page'))->links() }}