<?php

namespace App\Livewire\Components\About\Awards;

use Livewire\Component;

class Card extends Component
{
    public $title;
    public $description;

    public function mount($title,$description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function render()
    {
        return view('livewire.components.about.awards.card');
    }
}
