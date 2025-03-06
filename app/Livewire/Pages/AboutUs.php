<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;
class AboutUs extends Component
{
    #[Title('About Us')]
    public function render()
    {
        return view('livewire.pages.about-us');
    }
}
