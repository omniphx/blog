@extends('layouts.minimal')

@section('title')
<title>Login</title>
@stop

{{-- Content --}}
@section('container')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="subscribe">
            {{ Form::open(array(
                'route'  =>'session.store',
                'role'   =>'form',
                'class'  => 'form-horizontal',
                'method' =>'POST')) }}
                <div class="form-group">
                    {{ Form::label('email', 'Email:', ['class' => 'col-sm-2 control-label']) }}
                    <div class="col-sm-10">
                        {{ Form::email('email', null, ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('password', 'Password:', ['class' => 'col-sm-2 control-label']) }}
                    <div class="col-sm-10">
                        {{ Form::password('password', ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {{ Form::submit('Submit', ['class'=>'btn btn-default']) }}
                    </div>
                </div>
                
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop