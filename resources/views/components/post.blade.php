<article class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ \Carbon\Carbon::make($post->created_at)->format('F j, Y') }} by <a href="{{ route('posts.author', $post->author->slug) }}">{{ $post->author->name }}</a></p>

    {{ $post->promo }} ... <br/>
    <a href="{{ route('post.view', $post->slug) }}">Continue reading...</a>
</article>
