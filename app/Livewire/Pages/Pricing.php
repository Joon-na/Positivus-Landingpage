<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class Pricing extends Component
{
    #[Title('Pricing')]
    public function render()
    {
        return view('livewire.pages.pricing');
    }
}
