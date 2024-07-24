<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MaintenanceRequest;
use App\Models\Equipment;
use App\Models\RequestType;

class RequestComponent extends Component
{
    public $equipment_id = '';
    public $request_type_id = '';
    public $description = '';
    public $equipments = [];
    public $requestTypes = [];

    public function mount()
    {
        $this->equipments = Equipment::all();
        $this->requestTypes = RequestType::all();
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'equipment_id' => 'required',
            'request_type_id' => 'required',
            'description' => 'required',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'equipment_id' => 'required',
            'request_type_id' => 'required',
            'description' => 'required',
        ]);

        MaintenanceRequest::create([
            'equipment_id' => $this->equipment_id,
            'request_type_id' => $this->request_type_id,
            'description' => $this->description,
            'status' => 'Pending',
        ]);

        session()->flash('message', 'New maintenance request has been added successfully');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.request-component', [
            'equipments' => $this->equipments,
            'requestTypes' => $this->requestTypes
        ])->layout('layouts.app');
    }
}
