<a target="_blank" href="https://twitter.com/intent/tweet?text={{ $post->description }}&url={{ route('post.show',$post->slug) }}" class="twitter-link">
	<span class="fa-stack">
		<i class="fa fa-square fa-stack-2x"></i>
		<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
	</span>
</a>

<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('post.show',$post->slug) }}" class="facebook-link">
	<span class="fa-stack">
		<i class="fa fa-square fa-stack-2x"></i>
		<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
	</span>
</a>

<a target="_blank" href="https://plus.google.com/share?url={{ route('post.show',$post->slug) }}" class="googleplus-link">
	<span class="fa-stack">
	  <i class="fa fa-square fa-stack-2x"></i>
	  <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
	</span>
</a>

<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('post.show',$post->slug) }}&title={{ $post->title }}&summary={{ $post->description }}" class="linkedin-link">
	<span class="fa-stack">
		<i class="fa fa-square fa-stack-2x"></i>
		<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
	</span>
</a>

<a target="_blank" href="http://www.reddit.com/submit?url={{ route('post.show',$post->slug) }}&title={{ $post->title }}" class="reddit-link">
	<span class="fa-stack">
		<i class="fa fa-square fa-stack-2x"></i>
		<i class="fa fa-reddit fa-stack-1x fa-inverse"></i>
	</span>
</a>

<a target="_blank" href="http://www.tumblr.com/share/link?url={{ urlencode(route('post.show',$post->slug)) }}&name={{ urlencode($post->title) }}&description={{ urlencode($post->description) }}" class="tumblr-link">
	<span class="fa-stack">
		<i class="fa fa-square fa-stack-2x"></i>
		<i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
	</span>
</a>

<a target="_blank" href="mailto:?subject={{$post->title}}&body={{ $post->description }} Read more: {{ route('post.show',$post->slug) }}" class="mail-link">
	<span class="fa-stack">
		<i class="fa fa-square fa-stack-2x"></i>
		<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
	</span>
</a>