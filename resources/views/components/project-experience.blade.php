@props(['screenshots'])

<section class="project-experience" id="inside-experience" aria-labelledby="experience-heading" data-project-experience>
    <div class="wrap">
        <div class="project-experience__heading">
            <div><p class="creation-context">Inside Nusavue</p><h2 id="experience-heading">Choose. Book. Be there.</h2></div>
            <p>Every choice is part of the experience. Explore the real screens, from choosing a section to keeping a ticket ready for the day.</p>
        </div>
        <div class="project-experience__controls" role="group" aria-label="Choose a part of the ticketing journey" data-experience-controls hidden>
            @foreach ($screenshots as $index => $screenshot)
                <button type="button" aria-label="{{ $screenshot['label'] }}" aria-pressed="false" aria-controls="experience-panel-{{ $index }}" data-experience-step="{{ $index }}" wire:key="experience-control-{{ $index }}"><span aria-hidden="true">0{{ $index + 1 }}</span>{{ $screenshot['label'] }}</button>
            @endforeach
        </div>
        <p class="sr-only" role="status" aria-live="polite" data-experience-status></p>
        @foreach ($screenshots as $index => $screenshot)
            <div class="project-experience__panel" id="experience-panel-{{ $index }}" data-experience-panel="{{ $index }}" wire:key="experience-{{ $index }}">
                <div class="project-experience__screen">
                    <a href="{{ asset($screenshot['image']) }}" target="_blank" rel="noopener" data-experience-zoom data-title="{{ $screenshot['label'] }}" aria-label="Enlarge screenshot: {{ $screenshot['label'] }}">
                        <img src="{{ asset($screenshot['image']) }}" alt="{{ $screenshot['alt'] }}" width="{{ $screenshot['width'] }}" height="{{ $screenshot['height'] }}" loading="lazy">
                        <span class="project-experience__enlarge"><span aria-hidden="true">⤢</span> Enlarge the screenshot</span>
                    </a>
                </div>
                <div class="project-experience__copy">
                    <p class="project-experience__position">{{ $screenshot['label'] }}</p>
                    <h3>{{ $screenshot['title'] }}</h3>
                    <p>{{ $screenshot['text'] }}</p>
                    <ul>
                        @foreach ($screenshot['details'] as $detail)
                            <li wire:key="experience-{{ $index }}-detail-{{ $loop->index }}">{{ $detail }}</li>
                        @endforeach
                    </ul>
                    <a class="project-experience__build" href="{{ route('build') }}">Imagine this level of care in your project.</a>
                </div>
            </div>
        @endforeach
        <div class="project-experience__footer"><p>Event discovery. Seat selection. A cart that follows every choice.</p><a href="https://nusavue.net" target="_blank" rel="noopener noreferrer">Visit Nusavue <span aria-hidden="true">↗</span></a></div>
    </div>
    <dialog class="experience-zoom" data-experience-dialog aria-label="Enlarged project screenshot">
        <div class="experience-zoom__bar"><p data-experience-zoom-title></p><button type="button" data-experience-close aria-label="Close enlarged screenshot">Close <span aria-hidden="true">×</span></button></div>
        <div class="experience-zoom__image"><img alt="" data-experience-zoom-image></div>
    </dialog>
</section>
