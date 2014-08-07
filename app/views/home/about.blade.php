@extends('layouts.default')

@section('title')
<title>About</title>
<meta description="My name is Matt Mitchener and I like PHP."/>
@stop

{{-- Content --}}
@section('container')
    
    <div class="row">
        <div class="col-lg-8">
            <div class="panel me-panel">
                <h1 class="about-heading">ME</h1>
            </div>
            <img src="assets/img/profile_m.jpg" alt="That's me!" class="img-responsive img-rounded" style="text-align:center" width="100%">
            <hr />
            <p>Hello there... let me tell me a little about myself!</p>

		</div>

        @include('layouts.wells')
        
	</div>

	<hr />

@stop