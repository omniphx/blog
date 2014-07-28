@extends('layouts.default')

@section('title')
<title>Home</title>
@stop

{{-- Content --}}
@section('container')
    
    <div class="row">
        <div class="col-lg-8">

            <h1>Contact me</h1>
            <p>Contact me at...</p>

		</div>

        @include('layouts.wells')
        
	</div>

	<hr />

@stop