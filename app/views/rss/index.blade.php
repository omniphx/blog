{{ '<?xml version="1.0" encoding="utf-8"?>' }}

<feed xmlns="http://www.w3.org/2005/Atom">

	<title>Matt Mitchener's Blog</title>
	<subtitle>Matt Mitchener's blog about Salesforce, life, travels, coding, etc.</subtitle>
	<link href="http://mattmitchener.com/feed" rel="self" />
	<updated>{{ Carbon\Carbon::now()->toATOMString() }}</updated>
	<author>
		<name>Matt Mitchener</name>
	</author>
	<id>tag:mattmitchener.com,{{ date('Y') }}:/feed</id>

	@foreach ($posts as $post)	
	<entry>
		<title>{{$post->title}}</title>
		<link href="{{ URL::route('post.show', $post->slug) }}" />
		<id>{{ StringHelper::post_tag_uri($post) }}</id>
		<summary>{{ $post->excerpt }}</summary>
	</entry>
	@endforeach

</feed>