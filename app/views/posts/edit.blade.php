@extends('layouts.default')

@section('title')
<title></title>
@stop

{{-- Content --}}
@section('container')

<div class="panel panel-default">
	<div class="panel-heading"><h3>Edit: {{$post->title}}</h1></div>
	<div class="panel-body">

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
			{{ Form::textarea('description', null, ['class'=>'form-control','rows'=>'3']) }}
		</div>

		<div class="form-group">
			{{ Form::label('Content') }}
			{{ Form::textarea('content', null, ['class'=>'form-control','rows'=>'5']) }}
		</div>

		<div class="form-group">
			{{ Form::label('Type') }}
			{{ Form::text('type_id', null, ['class'=>'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('Author') }}
			{{ Form::text('author_id', null, ['class'=>'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('Tags') }}
			{{ Form::text('tag_id', null, ['class'=>'form-control']) }}
		</div>

		<div class="center-block">
		{{ Form::open() }}
		<button class='btn close'>
			{{$tag['name']}}
			<span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		</button>
		{{ Form::close() }}
		@endforeach
		</div>

		<br />

		<div class="form-group">
			{{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
			<button class="btn btn-primary">Preview</button>
		</div>

		{{ Form::close() }}

 	</div>
</div>

@stop