@php
    // The surrounding section owns the heading, so the form itself only
    // carries an accessible label. No duplicated copy, no second h2.
    $label = match ($intent) {
        'programme' => 'Reserve a seat',
        'consult' => 'Start a conversation',
        default => 'Invite me to speak',
    };

    $messageLabel = match ($intent) {
        'programme' => 'Which programme, and how many seats?',
        'consult' => 'What process do you want to fix?',
        default => 'Tell me about your event',
    };
@endphp

<div>
    @if ($sent)
        <div class="alert alert--ok" role="status">
            <b>Thanks, your message is in.</b>
            <p>I read these myself. Expect a reply from me within two working days.</p>
        </div>

        <p class="small" style="margin-top:18px">
                In a hurry? Email <a class="link" href="mailto:{{ config('site.contact.email') }}">{{ config('site.contact.email') }}</a>.
        </p>
    @else
        <form wire:submit="submit" aria-label="{{ $label }}" novalidate>
          <div class="form-rows">
            <div class="grid grid--2">
                <label class="field">
                    <span>Your name</span>
                    <input class="input" type="text" wire:model="name" autocomplete="name"
                           @error('name') aria-invalid="true" @enderror>
                    @error('name') <span class="field-error">{{ $message }}</span> @enderror
                </label>

                <label class="field">
                    <span>Email</span>
                    <input class="input" type="email" wire:model="email" autocomplete="email"
                           @error('email') aria-invalid="true" @enderror>
                    @error('email') <span class="field-error">{{ $message }}</span> @enderror
                </label>
            </div>

            <div class="grid grid--2">
                <label class="field">
                    <span>Organisation <span style="color:var(--muted);font-weight:400">(optional)</span></span>
                    <input class="input" type="text" wire:model="organisation" autocomplete="organization">
                    @error('organisation') <span class="field-error">{{ $message }}</span> @enderror
                </label>

                <label class="field">
                    <span>{{ $intent === 'speak' ? 'Event date' : 'Preferred date' }}
                        <span style="color:var(--muted);font-weight:400">(optional)</span></span>
                    <input class="input" type="text" wire:model="preferred_date" placeholder="A month, or a specific date">
                    @error('preferred_date') <span class="field-error">{{ $message }}</span> @enderror
                </label>
            </div>

            <label class="field">
                <span>{{ $messageLabel }}</span>
                <textarea class="textarea" wire:model="message" rows="5"
                          @error('message') aria-invalid="true" @enderror></textarea>
                @error('message') <span class="field-error">{{ $message }}</span> @enderror
            </label>
          </div>

            <div style="display:flex;flex-wrap:wrap;align-items:center;gap:16px;margin-top:20px">
                <button class="btn btn--primary" type="submit" wire:loading.attr="disabled">
                    <span wire:loading.remove wire:target="submit">Send enquiry <span aria-hidden="true">↗</span></span>
                    <span wire:loading wire:target="submit">Sending...</span>
                </button>
                <span class="small" style="font-size:13.5px">I usually reply within two working days.</span>
            </div>

            <p class="form-note">
                I only use this to reply to you. No mailing list, no sharing.
            </p>
        </form>
    @endif
</div>
