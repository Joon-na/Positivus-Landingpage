<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class UseCase extends Component
{
    #[Title('Use Case')]
    public function render()
    {
        return view('livewire.pages.use-case');
    }
}
