<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateEmployee</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900&display=swap" rel="stylesheet">
    @livewireStyles
</head>
<body>
<div wire:ignore.self>
    <div class="ms-3">
        <p class="fs-4 text-dark text-center fw-bold">Create new Employee</p>
    </div>
    <div class="card-body">
        @if(session()->has("message"))
        <div class="alert alert-success text-center">{{ session("message") }}</div>
        @endif
    </div>
    <form wire:submit.prevent="storeEmployeeData" class="form-group rounded border col-6 ms-5 ms-4 bg-light container">
        <div class="col-8 row">
            <div>
                <label class="text-dark float-start p-0 fs-5 center m-1" for="employee_id">Employee Id</label>
            </div>
            <div class="form-group">
                <input placeholder="Enter employee id" type="text" class="form-control text-dark fw-lighter fs-6 m-0" id="employee_id" wire:model="employee_id">
                @error("employee_id") 
                <span class="text-danger fs-4">{{ $message }}</span> 
                @enderror
            </div>
            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="first_name">First Name</label>
            </div>
            <div class="form-group">
                <input placeholder="Enter first name" type="text" class="form-control text-dark fw-lighter fs-6 m-0" id="first_name" wire:model="first_name">
                @error("first_name") 
                <span class="text-danger fs-4">{{ $message }}</span> 
                @enderror
            </div>
            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="last_name">Last Name</label>
            </div>
            <div class="form-group">
                <input placeholder="Enter last name" type="text" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="last_name" wire:model="last_name">
                @error("last_name") 
                <span class="text-danger fs-4">{{ $message }}</span> 
                @enderror  
            </div>
            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="email">Email</label>
            </div>
            <div class="form-group">
                <input placeholder="Enter email" type="email" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="email" wire:model="email">
                @error("email") 
                <span class="text-danger fs-4">{{ $message }}</span> 
                @enderror  
            </div>
            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="phone">Phone Number</label>
            </div>
            <div class="form-group">
                <input placeholder="Enter phone number" type="number" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="phone" wire:model="phone">
                @error("phone") 
                <span class="text-danger fs-4">{{ $message }}</span> 
                @enderror  
            </div>
            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="location">Location</label>
            </div>
            <div class="form-group">
                <input placeholder="Enter location" type="text" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="location" wire:model="location">
                @error("location") 
                <span class="text-danger fs-4">{{ $message }}</span> 
                @enderror  
            </div>
            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="equipment">Equipment</label>
            </div>
            <div class="form-group">
                <input placeholder="Enter equipment" type="text" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="equipment" wire:model="equipment">
                @error("equipment") 
                <span class="text-danger fs-4">{{ $message }}</span> 
                @enderror  
            </div>
            <div>
                <button type="submit" class="btn btn-success col-12">Submit</button>
            </div>
        </div>
    </form>
</div>

@livewireScripts

</body>
</html>
