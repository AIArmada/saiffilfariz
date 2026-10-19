<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class BlogPage extends ContentPage
{
    protected string $template = 'livewire.blog-page';
}
