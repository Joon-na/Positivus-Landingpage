<?php

namespace App\Livewire;

use Livewire\Component;

namespace App\Livewire;

use Livewire\Component;

class ServiceCard extends Component
{
    public $title_1;
    public $title_2;
    public $background_card;
    public $background_title;
    public $text_color;
    public $image;
    public $arrow;
    public $text_arrow;

    public function mount($title_1, $title_2, $background_card, $background_title, $text_color, $image, $arrow, $text_arrow)
    {
        $this->title_1 = $title_1;
        $this->title_2 = $title_2;
        $this->background_card = $background_card;
        $this->background_title = $background_title;
        $this->text_color = $text_color;
        $this->image = $image;
        $this->arrow = $arrow;
        $this->text_arrow = $text_arrow;
    }

    public function render()
    {
        return view('livewire.service-card');
    }
}

