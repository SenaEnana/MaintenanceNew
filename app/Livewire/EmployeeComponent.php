<?php

namespace App\Livewire;

use Livewire\Component;

class EmployeeComponent extends Component
{
    public function __invoke()
    {
        return view('liveWire.employee-component')->layout('livewire.latouts.base');
    }
}
