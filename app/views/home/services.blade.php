@extends('layouts.default')

@section('title')
<title>Services</title>
@stop

{{-- Content --}}
@section('container')
    
    <div class="row">
        <div class="col-lg-8">

            <h1>Services</h1>
            <p>My services...</p>

		</div>

        @include('layouts.wells')
        
	</div>

	<hr />

@stop