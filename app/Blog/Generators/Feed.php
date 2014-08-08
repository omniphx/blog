<?php namespace Blog\Generators;

class Feed {

	public function generate($posts)
	{
		$feed = \Feed::make();

	    // set your feed's title, description, link, pubdate and language
	    $feed->title = 'Matt Mitchener\'s Blog';
	    $feed->description = 'Matt Mitchener\s blog about Salesforce, life, travels, coding, etc.';
	    $feed->logo = 'http://yoursite.tld/logo.jpg';
	    $feed->link = \URL::to('feed');
	    $feed->pubdate = $posts[0]->created_at;
	    $feed->lang = 'en';

	    foreach ($posts as $post)
	    {
	        // set item's title, author, url, pubdate, description and content
	        $feed->add($post->title, $post->author->name, \URL::to($post->slug), $post->created_at, $post->description, $post->content);
	    }

	    // show your feed (options: 'atom' (recommended) or 'rss')
	    // return $feed->render('atom');

	    // show your feed with cache for 60 minutes
	    // second param can be integer, carbon or datetime
	    // optional: you can set custom cache key with 3rd param as string
	    return $feed->render('atom',60);

		// return Response::view('rss.index', $data)
		// 	->header('Content-Type', 'application/atom+xml; charset=UTF-8');
	}
}