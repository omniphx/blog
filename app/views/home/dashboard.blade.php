@extends('layouts.minimal')



{{-- Content --}}
@section('container')

<h1>Posts</h1>

<!-- <a class="btn btn-default pull-right" href="{{route('post.create')}}">Create Post</a> -->

<table class="table">
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
		<th>Updated</th>
		<th>Published?</th>
		<th>Preview</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	@foreach ($posts as $post)
	<tr>
		<td>{{ $post->id }}</td>
		<td>{{ $post->title }}</td>
		<td>{{ $post->created_at }}</td>
		<td>{{ $post->updated_at }}</td>
		<td>
			@if (!$post->published)
				{{ Form::model($post, [
					'method' => 'PATCH',
					'route'  => ['post.publish', $post->id]]) }}
				{{ Form::submit('Publish', [
					'class' => 'btn btn-default']) }}

				{{ Form::close() }}
			@else
				<button class="btn btn-success" disabled="disabled">Publish</button>
			@endif
		</td>
		<td>
			<a href="{{route('post.preview',['id'=>$post->id])}}" class="btn btn-default">Preview</a>
		</td>
		<td>
			<a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-default">Edit</a>
		</td>
		<td>
			{{ Form::model($post, [
					'method' => 'DELETE',
					'route'  => ['post.destroy', $post->id]]) }}
				{{ Form::submit('Delete', [
					'class' => 'btn btn-danger']) }}

			{{ Form::close() }}
		</td>
	</tr>
		
	@endforeach
</table>

@stop