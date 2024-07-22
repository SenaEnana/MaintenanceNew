<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MaintenanceRequest;

class RequestComponent extends Component
{

    public $customer_id = '';
    public $technician_id = '';
    public $equipment_id = '';
    public $request_type_id = '';
    public $description = '';
   
    public function updated($fields){
                $this->validateOnly($fields,[
                'customer_id' => 'required|unique:maintenance-requests',
                'technician_id' => 'required',
                'equipment_id' => 'required',
                'request_type_id' => 'required',
                'description' => 'required',
                ]);
    }
    public function submit()
    {
        $this->validate([
            'customer_id' => 'required|unique:maintenance-requests',
            'technician_id' => 'required',
            'equipment_id' => 'required',
            'request_type_id' => 'required',
            'description' => 'required'
        ]);

        MaintenanceRequest::create([
            'customer_id' => $this->customer_id,
            'technician_id' => $this->technician_id,
            'equipment_id' => $this->equipment_id,
            'request_type_id' => $this->request_type_id,
            'description' => $this->description,
        ]);

        session()->flash('message', 'New employee has been added successfully');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.request-component')->layout('layouts.app');
    }
}
