@extends('layouts.app')

@section('content')
    @if($mainFeature)
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">{{ $mainFeature->title }}</h1>
            <p class="lead my-3">{{ $mainFeature->promo }}</p>
            <p class="lead mb-0"><a href="{{ route('post.view', $mainFeature->slug) }}" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>
    @endif

    @if($featured)
    <div class="row mb-2">
        @foreach($featured as $feature)
        <div class="col-md-{{ 12 / $loop->count }}">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2" style="color: {{ $feature->category->color }}">{{$feature->category->name}}</strong>
                    <h3 class="mb-0">{{ \Illuminate\Support\Str::limit($feature->title, 22, '...') }}</h3>
                    <div class="mb-1 text-muted">{{ \Carbon\Carbon::make($feature->created_at)->format('M n') }}</div>
                    <p class="card-text mb-auto">{{ Illuminate\Support\Str::limit($feature->body, 110, '...') }}</p>
                    <a href="{{ route('post.view', $feature->slug) }}" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    <div class="row g-5">
        <div class="col-md-8">
            @foreach($posts as $post)
                <x-postcomponent :post="$post"/>
            @endforeach

            {{ $posts->links() }}

        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                    </ol>
                </div>

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
