@extends('layouts.default')

@section('title')
<title>Matt Mitchener's Blog</title>
<meta name="description=" content="A blog about salesforce, coding, and life">
<meta property="og:site_name" content="Matt Mitchener"/>
<meta property="og:description" content="A place I share cool stuff you can do with the Force.com platform and my work on other projects."/>
<meta property="og:locale" content="en_US"/>
<meta property="og:url" content="http://mattmitchener.com" />
<meta property="og:image" content="http://mattmitchener.com/assets/img/BlogHeader.png" />
<meta property="og:title" content="Force.com development and more"/>
@stop

{{-- Content --}}
@section('container')

@include('layouts.header')

@include('layouts.preview')

@stop
