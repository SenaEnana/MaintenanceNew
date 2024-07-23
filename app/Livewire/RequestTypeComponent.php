<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RequestType;

class RequestTypeComponent extends Component
{
    public $request_types_id = '';
    public $name = '';
    public $description = '';
   
    public function updated($fields){
                $this->validateOnly($fields,[
                'request_types_id' => 'required|unique:request_types',
                'name' => 'required',
                'description' => 'required',
                ]);
    }
    public function submit()
    {
        $this->validate([
            'request_types_id' => 'required|unique:request_types',
            'name' => 'required',
            'description' => 'required'
        ]);

        RequestType::create([
            'request_types_id' => $this->request_types_id,
            'name' => $this->name,
            'description' => $this->description,
        ]);

        session()->flash('message', 'New employee has been added successfully');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.request-type-component')->layout('layouts.app');
    }
}
