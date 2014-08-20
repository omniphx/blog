@extends('layouts.minimal')

@section('title')
<title>Create Post</title>
@stop

{{-- Content --}}
@section('container')

<div class="panel panel-default">
	<div class="panel-heading"><h1>Create new</h1></div>
	<div class="panel-body">

		{{ Form::open([
			'method' => 'POST',
			'role'   => 'form',
			'route'  => 'post.store']) }}

		<div class="form-group">
			{{ Form::label('Title') }}
			{{ Form::text('title', null, ['class'=>'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('Description') }}
			{{ Form::textarea('description', null, ['class'=>'form-control','rows'=>'3']) }}
		</div>

		<div class="form-group">
			{{ Form::label('Content') }}
			{{ Form::textarea('content', null, ['class'=>'form-control','rows'=>'10']) }}
		</div>

		<div class="form-group">
			{{ Form::label('Type') }}
			{{ Form::select('type_id', $types, null, ['class'=>'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('Author') }}
			{{ Form::select('author_id', $authors, null, ['class'=>'form-control']) }}
		</div>

		<br />

		<div class="form-group">
			{{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
		</div>

		{{ Form::close() }}

 	</div>
</div>

@stop