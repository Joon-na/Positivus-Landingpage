<?php

namespace App\Livewire;

use Livewire\Component;

class TeamCard extends Component
{
    public $name;
    public $position;
    public $image;
    public $description;

    public function mount($name, $position, $image, $description)
    {
        $this->name = $name;
        $this->position = $position;
        $this->image = $image;
        $this->description = $description;
    }
    public function render()
    {
        return view('livewire.team-card');
    }
}
