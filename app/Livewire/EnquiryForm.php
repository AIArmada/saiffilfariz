<?php

namespace App\Livewire;

use App\Models\Enquiry;
use Livewire\Component;

class EnquiryForm extends Component
{
    /** speak | programme | consult | build | partner */
    public string $intent = 'speak';

    /** When true the visitor picks their own intent on the Work Together page. */
    public bool $showIntentPicker = false;

    public string $name = '';

    public string $email = '';

    public string $organisation = '';

    public string $preferred_date = '';

    public string $message = '';

    public bool $sent = false;

    /**
     * Rules live in a method rather than in #[Validate] attributes so they are
     * available to $this->validate() everywhere, including outside a request.
     */
    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:80'],
            'email' => ['required', 'email', 'max:120'],
            'organisation' => ['nullable', 'string', 'max:120'],
            'preferred_date' => ['nullable', 'string', 'max:60'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
        ];
    }

    protected function validationAttributes(): array
    {
        return [
            'preferred_date' => 'date',
        ];
    }

    public function mount(string $intent = 'speak', bool $showIntentPicker = false): void
    {
        $this->intent = in_array($intent, ['speak', 'programme', 'consult', 'build', 'partner'], true) ? $intent : 'speak';
        $this->showIntentPicker = $showIntentPicker;
    }

    public function updatedIntent(string $value): void
    {
        if (! in_array($value, ['speak', 'programme', 'consult', 'build', 'partner'], true)) {
            $this->intent = 'speak';
        }
    }

    public function submit(): void
    {
        $this->validate();

        Enquiry::create([
            'name' => $this->name,
            'email' => $this->email,
            'organisation' => $this->organisation ?: null,
            'intent' => $this->intent,
            'preferred_date' => $this->preferred_date ?: null,
            'message' => $this->message,
        ]);

        $this->reset('name', 'email', 'organisation', 'preferred_date', 'message');
        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.enquiry-form');
    }
}
