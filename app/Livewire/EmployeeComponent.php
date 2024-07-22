<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;
use Illuminate\Validation\ValidationException;

class EmployeeComponent extends Component
{
    public $employee_id, $first_name, $last_name, $email, $phone, $location, $equipment;
   
   public function updated($fields){
$this->validateOnly($fields,[
'employee_id' => 'required|unique:employees',
'first_name' => 'required',
'last_name' => 'required',
'email' => 'required|email',
'phone' => 'required|numeric',
'location' => 'required',
'equipment' => 'required',
]);
   }

    public function storeEmployeeData(){
        try {
            $this->validate([
                'employee_id' => 'required|unique:employees',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'location' => 'required',
                'equipment' => 'required',
            ]);

            $employee = new Employee();
            $employee->employee_id = $this->employee_id;
            $employee->first_name = $this->first_name;
            $employee->last_name = $this->last_name;
            $employee->email = $this->email;
            $employee->phone = $this->phone;
            $employee->location = $this->location;
            $employee->equipment = $this->equipment;

            $employee->save();

            session()->flash('message', 'New employee has been added successfully');
        } catch (\Exception $e) {
            Log::error('Error saving employee: ' . $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.employee-component')->layout('layouts.app');
    }
}