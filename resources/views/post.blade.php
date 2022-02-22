@extends('layouts.app')

@section('content')
    <div class="row g-5 mt-3">
        <div class="col-md-8">
            <article class="blog-post">
                <h2 class="blog-post-title">{{ $post->title }}</h2>
                <p class="blog-post-meta">{{ \Carbon\Carbon::make($post->created_at)->format('F j, Y') }} by <a href="{{ route('posts.author', $post->author->slug) }}">{{ $post->author->name }}</a></p>

                {{ $post->body }}
            </article>
        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">Post summary</h4>
                    <p class="mb-0">
                        {{ $post->promo }}
                    </p>
                </div>

                <x-archiveposts/>

                <div class="p-4">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
