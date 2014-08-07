@extends('layouts.default')

@section('title')
<title></title>
@stop

{{-- Content --}}
@section('container')

<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Excerpt</th>
				<th>Body</th>
				<th>Created</th>
				<th>Updated</th>
				<th>Published?</th>
				<th>Update?</th>
			</tr>
			@foreach ($posts as $post)
			<tr>
				{{ Form::model($post, [
						'method' => 'PATCH',
						'route'  => ['post.update', $post->id]]) }}
				<td>{{ $post->id }}</td>
				<td>{{ Form::text('title') }}</td>
				<td>{{ Form::text('excerpt') }}</td>
				<td>{{ Form::text('body') }}</td>
				<td>{{ $post->created_at }}</td>
				<td>{{ $post->updated_at }}</td>
				<td>{{ Form::checkbox('published') }}</td>
				<td>{{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
				</td>
				{{ Form::close() }}
			</tr>
				
			@endforeach
		</table>
	</div>

</div>
@stop