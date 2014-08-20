@extends('layouts.minimal')



{{-- Content --}}
@section('container')

<ul id="posts" class="nav nav-pills">
  <li class="active"><a href="#posts">Posts</a></li>
  <li><a href="#authors">Authors</a></li>
  <li><a href="#types">Types</a></li>
</ul>

<div class="clearfix">
	<h2 style="float: left;">Posts</h2>
	<a class="btn btn-default" href="{{route('post.create')}}" style="float: right; position: relative; top: 21px; right: 10px;">Create</a>
</div>

<table class="table">
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
		<th>Updated</th>
		<th>Published</th>
		<th>Publish?</th>
		<th>Preview?</th>
		<th>Edit?</th>
		<th>Delete?</th>
	</tr>
	@foreach ($posts as $post)
	<tr>
		<td>{{ $post->id }}</td>
		<td>{{ $post->title }}</td>
		<td>{{ $post->created_at }}</td>
		<td>{{ $post->updated_at }}</td>
		<td>{{ $post->published_at }}</td>
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

<!-- Authors table -->

<ul id="authors" class="nav nav-pills">
  <li><a href="#posts">Posts</a></li>
  <li class="active"><a href="#authors">Authors</a></li>
  <li><a href="#types">Types</a></li>
</ul>

<div class="clearfix">
	<h2 style="float: left;">Authors</h2>
	<div style="float: right; position: relative; top: 21px; right: 10px;">
		{{ Form::open([
			'route'  => 'author.store',
			'class'  => 'form-inline',
			'role'   => 'form']) }}
			{{ Form::text('name') }}
			{{ Form::submit('Create', ['class' => 'btn btn-default']) }}
		{{ Form::close() }}
	</div>
</div>

<table class="table">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Created</th>
		<th>Updated</th>
		<th>Update?</th>
		<th>Delete?</th>
	</tr>
	@foreach ($authors as $author)

	<tr>
		{{ Form::model($author, [
			'method' => 'PATCH',
			'route'  => ['author.update', $author->id]]) }}
		<td>{{ $author->id }}</td>
		<td>{{ Form::text('name', null, ['class'=>'form-control']) }}</td>
		<td>{{ $author->created_at }}</td>
		<td>{{ $author->updated_at }}</td>
		<td>
			{{ Form::submit('Update', [
					'class' => 'btn btn-default']) }}
		{{ Form::close() }}
		</td>
		<td>
		{{ Form::model($author, [
					'method' => 'delete',
					'route'  => ['author.destroy', $author->id]]) }}
			{{ Form::submit('Delete', [
					'class' => 'btn btn-danger']) }}
		{{ Form::close() }}
		</td>
	</tr>
		
	@endforeach
</table>

<!-- Types table -->

<ul id="types" class="nav nav-pills">
  <li><a href="#posts">Posts</a></li>
  <li><a href="#authors">Authors</a></li>
  <li class="active"><a href="#types">Types</a></li>
</ul>

<div class="clearfix">
	<h2 style="float: left;">Types</h2>
	<div style="float: right; position: relative; top: 21px; right: 10px;">
		{{ Form::open([
			'route'  => 'type.store',
			'class'  => 'form-inline',
			'role'   => 'form']) }}
			{{ Form::text('name') }}
			{{ Form::submit('Create', ['class' => 'btn btn-default']) }}
		{{ Form::close() }}
	</div>

</div>

<table class="table">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Created</th>
		<th>Updated</th>
		<th>Update?</th>
		<th>Delete?</th>
	</tr>
	@foreach ($types as $type)

	<tr>
		{{ Form::model($type, [
			'method' => 'PATCH',
			'route'  => ['type.update', $type->id]]) }}
		<td>{{ $type->id }}</td>
		<td>{{ Form::text('name', null, ['class'=>'form-control']) }}</td>
		<td>{{ $type->created_at }}</td>
		<td>{{ $type->updated_at }}</td>
		<td>
			{{ Form::submit('Update', ['class' => 'btn btn-default']) }}
		{{ Form::close() }}
		</td>
		<td>
		{{ Form::model($type, [
					'method' => 'delete',
					'route'  => ['type.destroy', $type->id]]) }}
			{{ Form::submit('Delete', [
					'class' => 'btn btn-danger']) }}
		{{ Form::close() }}
		</td>
	</tr>
		
	@endforeach
</table>

@stop