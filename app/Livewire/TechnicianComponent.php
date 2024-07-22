<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Technician;

class TechnicianComponent extends Component
{

    public $technician_id = '';
    public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $phone = '';
    public $job_type_id = '';
    public $service_location_id = '';
   
    public function updated($fields){
            $this->validateOnly($fields,[
            'technician_id' => 'required|unique:technicians',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'job_type_id' => 'required',
            'service_location_id' => 'required',
            ]);
    }
    public function submit()
    {
        $this->validate([
            'technician_id' => 'required|unique:technicians',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'job_type_id' => 'required',
            'service_location_id' => 'required',
        ]);

        Technician::create([
            'technician_id' => $this->technician_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'job_type_id' => $this->job_type_id,
            'service_location_id' => $this->service_location_id,
        ]);

        session()->flash('message', 'New employee has been added successfully');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.technician-component')->layout('layouts.app');
    }
}
