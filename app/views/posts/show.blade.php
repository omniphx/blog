@extends('layouts.default')

@section('title')
<title>{{ $post->title }}</title>
@stop

@section('header')
@stop

{{-- Content --}}
@section('container')

<div class="row">
	<div class="col-lg-8">

        <div class="row">
            <div class="col-sm-2">
                <div class="icon icon-{{$post->type->name}}">
                    <h3>{{StringHelper::upperCase($post->type->name)}}</h3>
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
                <h1>{{$post->title}}</h1>
                @include('layouts.social.shareicons')
                <br/>
                <p class="lead">by <a href="{{ route('author.show', $post->author->slug) }}">{{$post->author->name}}</a>
                <br />
               
                <div class="row">
                    <div class="col-sm-7">
                        <span class="glyphicon glyphicon-time"></span> Posted on {{date("F nS\, Y \a\\t g:i a",strtotime($post->created_at))}}
                    </div>
                    <div class="col-sm-5">
                        <span class="glyphicon glyphicon-tags"></span>&nbsp; Tags: 
                        @foreach ($post->tags as $tag)
                        <a href="{{ route('tag.show',$tag->slug) }}">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <p>{{ $post->content }}</p>

        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'matthewmitchener'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
            

	</div>

	@include('layouts.wells')

</div>

@stop