{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<rss version="2.0">
    <channel>
        <title>Ideas — Saiffil Fariz</title>
        <link>{{ route('ideas') }}</link>
        <description>What Saiffil Fariz learns from talks, classes and projects.</description>
        @foreach ($posts as $post)
        <item>
            <title>{{ $post->title }}</title>
            <link>{{ $post->url() }}</link>
            <guid>{{ $post->url() }}</guid>
            <pubDate>{{ $post->published_at->toRfc2822String() }}</pubDate>
            <description>{{ $post->dek }}</description>
        </item>
        @endforeach
    </channel>
</rss>
