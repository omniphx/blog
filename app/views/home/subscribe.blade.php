@extends('layouts.minimal')

@section('title')
<title>Subscribe</title>
@stop

{{-- Content --}}
@section('container')

<div class="subscribe">


    {{ Form::open(array(
        'route'  =>'subscribe.fire',
        'role'   =>'form',
        'class'  =>'subscribe-form',
        'method' =>'POST')) }}

      <div class="form-group">
        <h1>Subscribe</h1>
        <label class="sr-only" for="inputEmail">Email address</label>
        {{ Form::text('email', null, [
            'placeholder' => 'Email',
            'class'       =>'form-control input-lg input-subscribe']) }}
        <button type="submit" class="btn btn-primary btn-lg btn-block">
            <i class="fa fa-envelope"></i>
        </button>
      </div>
    {{Form::close() }}

</div>

@stop