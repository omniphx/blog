@extends('layouts.default')

@section('title')
<title>{{ $post->title }}</title>
<meta name="description=" content="{{ $post->description }}">
@stop

@section('header')
@stop

{{-- Content --}}
@section('container')

@include('layouts.header')

<div class="row">
    <panel>
    <div class="col-md-2 hidden-xs hidden-sm">
        <div class="icon icon-{{$post->type->name}}">
            <h3>{{StringHelper::upperCase($post->type->name)}}</h3>
            @if ($post->type->name == 'code')
                <i class="fa fa-code fa-3x"></i>
            @elseif ($post->type->name == 'sports')
                <i class="fa fa-dribbble fa-3x"></i>
            @elseif ($post->type->name == 'life')
                <i class="fa fa-quote-right fa-3x"></i>
            @elseif ($post->type->name == 'sfdc')
                <i class="fa fa-cloud fa-3x"></i>
            @endif
        </div>
    </div>
    <div class="col-md-10">
        <h2>{{$post->title}}</h2>
        <p>
            <span class="glyphicon glyphicon-time"></span> Posted on {{date("F nS\, Y \a\\t g:i a",strtotime($post->created_at))}}
        </p>
        <p>
            @include('layouts.social.shareicons')
        </p>
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

@stop