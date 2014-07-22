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
            <a href="{{ route('tag.show',$tag->slug) }}">{{ $tag->name }}</a>
            @endforeach</p>
        <hr>
        <p>{{ $post->body }}</p>

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