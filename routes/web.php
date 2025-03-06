<?php
use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Pages\Home::class)->name('home');
Route::get('/about-us', App\Livewire\Pages\AboutUs::class)->name('about-us');
Route::get('/services', App\Livewire\Pages\ServicesPage::class)->name('services');
Route::get('/use-case', App\Livewire\Pages\UseCase::class)->name('use-case');
Route::get('/pricing', App\Livewire\Pages\Pricing::class)->name('pricing');
Route::get('/blog', App\Livewire\Pages\Blog::class)->name('blog');