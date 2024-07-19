<?php

namespace App\Livewire;

use Livewire\Component;

class TechnicianComponent extends Component
{
    // public function render()
    // {
    //     return view('livewire.technician-component');
    // }
    public function __invoke()
    {
        return view('livewire.technician-component')->layout('livewire.layouts.base');
    }
}
