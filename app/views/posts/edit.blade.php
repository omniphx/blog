@extends('layouts.default')

@section('title')
<title></title>
@stop

{{-- Content --}}
@section('container')

<div class="panel panel-default">
	<div class="panel-heading"><h3>{{$post->title}}</h1></div>
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
			{{ Form::select('type_id', $types, $post->type_id, ['class'=>'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('Author') }}
			{{ Form::select('author_id', $authors, $post->author_id, ['class'=>'form-control']) }}
		</div>

		<br />

		<div class="form-group">
			{{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
			<a href="{{route('post.preview',['id'=>$post->id])}}" class="btn btn-default">Preview</a>
		</div>

		{{ Form::close() }}

 	</div>
</div>

@stop