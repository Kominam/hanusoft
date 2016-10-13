<h1>Hi, you</h1>

This is the most popular post on our Hanusoft in this week.<br>
@foreach ($popular_posts as $post)
	<h3><a href="{{ route('post_detail', $post->id) }}">{{$post->tittle}}</a></h3><br>
	{!!substr($post->content, 0,200)!!}<br>
	<br>
	<br>
	<br>
@endforeach
Thank you...
