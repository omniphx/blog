@extends('layouts.default')

@section('title')
<title>About</title>
<meta description="My name is Matt Mitchener and I like PHP."/>
@stop

{{-- Content --}}
@section('container')
    
    <div class="row">
        <div class="col-lg-8">
        	<h1 class="about-heading">ME</h1>
        	<hr>
            <img src="assets/img/profile_m.jpg" alt="That's me!" class="img-responsive img-rounded" style="text-align:center">
            <hr>
            @include('layouts.socialicons')
            <hr />
            <p>Hello there... let me tell me a little about myself!</p>

		</div>

        @include('layouts.wells')
        
	</div>

	<hr />

@stop