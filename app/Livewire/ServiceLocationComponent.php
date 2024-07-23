<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Location;

class ServiceLocationComponent extends Component
{

    public $locations_id = '';
    public $name = '';
    public $street = '';

    public function updated($fields){
                $this->validateOnly($fields,[
                'locations_id' => 'required|unique:locations',
                'name' => 'required',
                'street' => 'required',
                ]);
    }
    public function submit()
    {
        $this->validate([
            'locations_id' => 'required|unique:locations',
            'name' => 'required',
            'street' => 'required',
        ]);

        Location::create([
            'locations_id' => $this->locations_id,
            'name' => $this->name,
            'street' => $this->street,
        ]);

        session()->flash('message', 'New employee has been added successfully');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.service-location-component')->layout('layouts.app');
    }
}
