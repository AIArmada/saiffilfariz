<section {{ $attributes->merge(['class' => 'section creations-showcase']) }} aria-labelledby="creations-showcase-heading">
    <div class="wrap">
        <div class="head">
            <div><p class="creation-context">Made by me</p><h2 id="creations-showcase-heading">See the connections<br>in the work.</h2></div>
            <div><p class="body">Software, sound and storytelling can all move the same idea forward. Here is one project where they come together.</p><a class="link" href="{{ route('creations') }}">Explore all creations</a></div>
        </div>
        <x-concert-creation />
    </div>
</section>
