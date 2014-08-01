<?php namespace Blog\Helpers;

use Illuminate\Routing\UrlGenerator;

class StringHelper {

	protected $url;

	public function __construct(UrlGenerator $url)
	{
		$this->url = $url;
	}

	public function post_tag_uri($post)
	{
		$url = $this->url->route('post.show', $post->id);

		$parsedURL = parse_url($url);

		$output[] = $parsedURL['host'] . ',';
		$output[] = $post->created_at->format('Y-m-d') . ':';
		$output[] = $parsedURL['path'];

		return implode('', $output);
	}

	/**
	 * Make string uppercase
	 * @param  String $string
	 * @return String
	 */
	public function upperCase($string)
	{
		$upperCase = strtoupper($string);

		return $upperCase;
	}

}