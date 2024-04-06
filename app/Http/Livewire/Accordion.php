<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Accordion extends Component
{
    public $accordionOpen = false;
    public $title;
    public $body;

    public function render()
    {
        return view('livewire.accordion');
    }

    public function toggle(){
        $this->accordionOpen = !$this->accordionOpen;
    }
}
