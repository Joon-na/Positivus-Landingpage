<?php

namespace App\Livewire\Components\Home;

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
        return view('livewire.components.home.team-card');
    }
}
