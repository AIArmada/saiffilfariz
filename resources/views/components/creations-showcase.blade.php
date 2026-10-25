<section {{ $attributes->merge(['class' => 'section creations-showcase']) }} aria-labelledby="creations-showcase-heading">
    <div class="wrap">
        <div class="head">
            <div><p class="creation-context">The things I make</p><h2 id="creations-showcase-heading">Curiosity takes different forms.</h2></div>
            <div><p class="body">Sometimes it becomes software. Sometimes a song, a corporate film or something made just for the joy of it. Here is where those sides of me meet.</p><a class="link" href="{{ route('creations') }}">Explore my creations</a></div>
        </div>
        <x-concert-creation :compact="true" />
    </div>
</section>
