<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class ServicesPage extends Component
{
    #[Title('Services')] 
    public function render()
    {
        return view('livewire.pages.services-page');
    }
}
