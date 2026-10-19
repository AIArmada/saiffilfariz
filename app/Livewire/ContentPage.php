<?php

namespace App\Livewire;

use Livewire\Component;

abstract class ContentPage extends Component
{
    public bool $menuOpen = false;

    protected string $template;

    public function toggleMenu(): void
    {
        $this->menuOpen = ! $this->menuOpen;
    }

    public function closeMenu(): void
    {
        $this->menuOpen = false;
    }

    public function render()
    {
        return view($this->template);
    }
}
