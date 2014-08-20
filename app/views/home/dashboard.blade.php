@extends('layouts.minimal')



{{-- Content --}}
@section('container')

<p>
	<a class="btn btn-primary text-right" href="{{route('post.create')}}">Create</a>
</p>

<table class="table">
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
		<th>Updated</th>
		<th>Published?</th>
		<th>Preview</th>
		<th>Update</th>
	</tr>
	@foreach ($posts as $post)
	<tr>
<!-- 		{{ Form::model($post, [
				'method' => 'PATCH',
				'route'  => ['post.update', $post->id]]) }} -->
		<td>{{ $post->id }}</td>
		<td>{{ $post->title }}</td>
		<td>{{ $post->created_at }}</td>
		<td>{{ $post->updated_at }}</td>
		<td>
			<a href="{{route('post.publish')}}" class="btn btn-primary">Publish</a>
		</td>
		<td>
			<a href="{{route('post.preview')}}" class="btn btn-primary">Preview</a>
		</td>
		<td>
			<a href="{{route('post.update')}}" class="btn btn-primary">Update</a>
		</td>
		<!-- {{ Form::close() }} -->
	</tr>
		
	@endforeach
</table>

@stop