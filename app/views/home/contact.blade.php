@extends('layouts.default')

@section('title')
<title>Contact</title>
@stop

{{-- Content --}}
@section('container')
    
    <div class="row">
        <div class="col-lg-8">

            <h1>Contact me</h1>
            <p>Contact me at...</p>
            <i class="fa fa-bullhorn"></i>

		</div>

        @include('layouts.wells')
        
	</div>

	<hr />

@stop