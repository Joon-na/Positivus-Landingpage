<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about-us', App\Livewire\AboutUs::class)->name('about-us');
Route::get('/services', App\Livewire\ServicesPage::class)->name('services');
Route::get('/use-case', App\Livewire\UseCase::class)->name('use-case');
Route::get('/pricing', App\Livewire\Pricing::class)->name('pricing');
Route::get('/blog', App\Livewire\Blog::class)->name('blog');