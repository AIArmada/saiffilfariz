<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class HomePage extends Component
{
    public bool $menuOpen = false;

    public int $activeTestimonial = 0;

    public array $testimonials = [
        [
            'quote' => 'Clear, practical and immediately useful. This changed how I work.',
            'name' => 'Aisyah Rahman',
            'role' => 'Business Owner',
            'tone' => 'blue',
        ],
        [
            'quote' => 'One of the most relevant and engaging AI trainings I’ve attended.',
            'name' => 'Khairul Azman',
            'role' => 'Corporate Leader',
            'tone' => 'green',
        ],
        [
            'quote' => 'He makes complex things simple, and actionable.',
            'name' => 'Nurul Hidayah',
            'role' => 'Educator',
            'tone' => 'orange',
        ],
    ];

    public function toggleMenu(): void
    {
        $this->menuOpen = ! $this->menuOpen;
    }

    public function closeMenu(): void
    {
        $this->menuOpen = false;
    }

    public function nextTestimonial(): void
    {
        $this->activeTestimonial = ($this->activeTestimonial + 1) % count($this->testimonials);
    }

    public function previousTestimonial(): void
    {
        $this->activeTestimonial = ($this->activeTestimonial - 1 + count($this->testimonials)) % count($this->testimonials);
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
