<h1>{{ $post->title }}</h1>

<p>{{ $post->content }}</p>

<p>{{ $post->created_at->format('d M Y') }}</p>

{{-- <p>{{ $post->created_at->diffForHumans() }}</p> --}}
