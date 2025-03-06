<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Counter extends Component
{
    public $counter;

    public function mount($counter = 100)
    {
        $this->counter = $counter;
    }

    public function addCounter()
    {
        $this->counter++;
    }


    public function render()
    {
        return view('livewire.components.counter');
    }
}
