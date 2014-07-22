<?php namespace Blog;

class Helpers {

	public static function post_tag_uri($post)
	{
		$parseURL = parse_url(URL::route('post.show', $post->id));

		$output[] = $parsedURL['host'] . ',';
		$output[] = $post->created_at->format('Y-m-d') . ':';
		$output[] = $parsedURL['path'];

		return implode('', $output);
	}

}