<?php

namespace App\Livewire;

use Livewire\Component;

class Customer extends Component
{

    public $customer_id, $first_name, $last_name, $email, $phone, $location, $equipment;
   
    public function updated($fields){
 $this->validateOnly($fields,[
 'customer_id' => 'required|unique:customers',
 'first_name' => 'required',
 'last_name' => 'required',
 'email' => 'required|email',
 'phone' => 'required|numeric',
 'location' => 'required',
 ]);
    }
    public function storeCustomerData(){
        try {
            $this->validate([
                'customer_id' => 'required|unique:employees',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'location' => 'required',
            ]);

            $customer = new Customer();
            $customer->customer_id = $this->customer_id;
            $customer->first_name = $this->first_name;
            $customer->last_name = $this->last_name;
            $customer->email = $this->email;
            $customer->phone = $this->phone;
            $customer->location = $this->location;

            $customer->save();

            session()->flash('message', 'New customer has been added successfully');
        } catch (\Exception $e) {
            Log::error('Error saving customer: ' . $e->getMessage());
        }
    }
    public function __invoke()
    {
        return view('livewire.customer')->layout('livewire.layouts.base');
    }
}
