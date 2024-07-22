<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\JobType;

class JobTypeComponent extends Component
{

    public $job_types_id = '';
    public $name = '';
    public $description = '';
   
    public function updated($fields){
                $this->validateOnly($fields,[
                'job_types_id' => 'required|unique:job-types',
                'name' => 'required',
                'description' => 'required',
                ]);
    }
    public function submit()
    {
        $this->validate([
            'job_types_id' => 'required|unique:job-types',
            'name' => 'required',
            'description' => 'required'
        ]);

        JobType::create([
            'job_types_id' => $this->job_types_id,
            'name' => $this->name,
            'description' => $this->description,
        ]);

        session()->flash('message', 'New employee has been added successfully');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.job-type-component')->layout('layouts.app');
    }
}
