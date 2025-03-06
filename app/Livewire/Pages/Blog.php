<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class Blog extends Component
{
    #[Title('Blog')]
    public function render()
    {
        return view('livewire.pages.blog');
    }
}
