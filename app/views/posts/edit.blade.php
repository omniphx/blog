@extends('layouts.default')

@section('title')
<title></title>
@stop

{{-- Content --}}
@section('container')

{{ Form::model($post, [
	'method' => 'PATCH',
	'role'   => 'form',
	'route'  => ['post.update', $post->id]]) }}

<div class="form-group">
	{{ Form::label('Title') }}
	{{ Form::text('title', null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('Description') }}
	{{ Form::textarea('description', null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('Content') }}
	{{ Form::textarea('content', null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('Type') }}
	{{ Form::text('type_id', null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('Published') }}
	{{ Form::checkbox('published', 'Published') }}
</div>

<div class="form-group">
	{{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
</div>

{{ Form::close() }}

@stop