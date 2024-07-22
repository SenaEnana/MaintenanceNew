<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ServiceLocation;

class ServiceLocationComponent extends Component
{

    public $service_locations_id = '';
    public $name = '';
    public $technician_id = '';

    public function updated($fields){
                $this->validateOnly($fields,[
                'service_locations_id' => 'required|unique:service-locations',
                'name' => 'required',
                'technician_id' => 'required',
                ]);
    }
    public function submit()
    {
        $this->validate([
            'service_locations_id' => 'required|unique:service-locations',
            'name' => 'required',
            'technician_id' => 'required',
        ]);

        ServiceLocation::create([
            'service_locations_id' => $this->service_locations_id,
            'name' => $this->name,
            'technician_id' => $this->technician_id,
        ]);

        session()->flash('message', 'New employee has been added successfully');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.service-location-component')->layout('layouts.app');
    }
}
