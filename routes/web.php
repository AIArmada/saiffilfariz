<?php

use App\Livewire\ArticlePage;
use App\Livewire\BuildPage;
use App\Livewire\ConsultingPage;
use App\Livewire\CreationPage;
use App\Livewire\CreationsPage;
use App\Livewire\HomePage;
use App\Livewire\PillarPage;
use App\Livewire\ProgrammesPage;
use App\Livewire\SeriesPage;
use App\Livewire\SpeakingPage;
use App\Livewire\StoryPage;
use App\Livewire\TalkPage;
use App\Livewire\TalksPage;
use App\Livewire\WorkPage;
use App\Livewire\WritingPage;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
| Main pages and ways to work together.
*/

Route::livewire('/', HomePage::class)->name('home');

Route::livewire('/story', StoryPage::class)->name('story');
Route::livewire('/work', WorkPage::class)->name('work');
Route::livewire('/build', BuildPage::class)->name('build');
Route::livewire('/creations', CreationsPage::class)->name('creations');
Route::livewire('/creations/{slug}', CreationPage::class)->name('creation');
Route::livewire('/speaking', TalksPage::class)->name('speaking');
Route::livewire('/work/speaking', SpeakingPage::class)->name('speaking-service');
Route::redirect('/talks', '/speaking')->name('talks');
/* Registered before {talk} so a series slug is never mistaken for an engagement. */
Route::livewire('/talks/series/{series}', SeriesPage::class)->name('series');
Route::livewire('/talks/{talk}', TalkPage::class)->name('talk');
Route::livewire('/ideas', WritingPage::class)->name('ideas');
Route::livewire('/ideas/{post:slug}', ArticlePage::class)->name('article');

Route::get('/writing', fn (Request $request): RedirectResponse => redirect()->route('ideas', $request->query()))->name('writing');
Route::get('/writing/{post:slug}', fn (Post $post): RedirectResponse => redirect()->route('article', $post->slug));

Route::livewire('/programmes', ProgrammesPage::class)->name('programmes');
Route::livewire('/consulting', ConsultingPage::class)->name('consulting');

/* Writing topics. */
Route::livewire('/pillars/{pillar}', PillarPage::class)->name('pillar');

/* Old addresses, kept so nothing that was ever shared breaks. */
Route::redirect('/about', '/story');
Route::redirect('/blog', '/ideas');
Route::redirect('/library', '/ideas');
Route::redirect('/contact', '/#connect');
