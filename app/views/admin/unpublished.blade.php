@extends('layouts.default')

@section('title')
<title></title>
@stop

{{-- Content --}}
@section('container')

<div class="row">
	<div class="col-lg-12">
		<table class="table table-hover">
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
				<td>{{ $post->id }}</td>
				<td>{{ $post->title }}</td>
				<td>{{ $post->excerpt }}</td>
				<td>{{ $post->body }}</td>
				<td>{{ $post->created_at }}</td>
				<td>{{ $post->updated_at }}</td>
				<td>
					{{ Form::model($post, [
						'route' => [
							'post.update',
							$post->published],
						'class' => 'form',
						'role' => 'form']) }}
						{{ Form::checkbox('published',$post->published) }}
				</td>
				<td>
						{{ Form::submit('Update', [0
							'class' => 'btn btn-primary active']) }}
					{{ Form::close() }}
				</td>
			</tr>
				
			@endforeach
		</table>
	</div>

</div>
@stop