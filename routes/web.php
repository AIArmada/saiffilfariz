<?php

use App\Livewire\HomePage;
use App\Livewire\AboutPage;
use App\Livewire\BlogPage;
use App\Livewire\SpeakingPage;
use App\Livewire\StoryPage;
use App\Livewire\WorkPage;
use Illuminate\Support\Facades\Route;

Route::livewire('/', HomePage::class)->name('home');
Route::livewire('/about', AboutPage::class)->name('about');
Route::livewire('/story', StoryPage::class)->name('story');
Route::livewire('/work', WorkPage::class)->name('work');
Route::livewire('/speaking', SpeakingPage::class)->name('speaking');
Route::livewire('/blog', BlogPage::class)->name('blog');
Route::redirect('/contact', '/#connect')->name('contact');
