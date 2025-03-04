<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SwiperSlider extends Component
{
    public $slides = [
        "Slide 1", "Slide 2", "Slide 3", 
        "Slide 4", "Slide 5", "Slide 6", 
        "Slide 7", "Slide 8", "Slide 9"
    ];

    public function render()
    {
        return view('livewire.swiper-slider');
    }
}

