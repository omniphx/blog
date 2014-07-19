@extends('layouts.default')

@section('title')
<title>Home</title>
@stop

{{-- Content --}}
@section('container')
    
    <div class="row">
        <div class="col-lg-8">

            @include('layouts.entrypreview')

		</div>

        @include('layouts.wells')
        
	</div>

	<hr />

@stop
