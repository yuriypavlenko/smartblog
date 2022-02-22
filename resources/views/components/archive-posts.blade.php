<div class="p-4">
    <h4 class="fst-italic">Archives</h4>
    <ol class="list-unstyled mb-0">
        @foreach($months as $month => $items)
            <li><a href="{{ route('posts.archive', Illuminate\Support\Str::slug($month)) }}">{{ $month }}</a></li>
        @endforeach
    </ol>
</div>
