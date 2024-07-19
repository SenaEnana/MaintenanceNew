<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateTechnician</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body><div wire:ignore.self>
         <div class="ms-3">
              <p class="fs-4 text-dark text-center fw-bold">
              Create new technician
              </p>
            </div>
<form wire:submit.prevent="storeTechnicianData" action="" class="form-group rounded border col-6 ms-5 ms-4 bg-light container ">
            <div class="col-8 row">
    <div>
    <label class="text-dark float-start p-0 fs-5 center m-1" for="technician_id">Technician Id</label>
    </div>
  <div class="form-group">
    <input value="" placeholder="Enter employee id" type="text" class="form-control text-dark fw-lighter fs-6 m-0" id="technician_id" wire:model='technician_id'>
@error('technician_id') 
<span class="text-danger fs-4">{{ $message }}</span> 
@enderror
</div>
  <div>
  <label class="text-dark float-start p-0 fs-5 m-1" for="first_name">First Name</label>
  </div>
<div class="form-group">
<input value="" placeholder="Enter first name" type="text" class="form-control text-dark fw-lighter fs-6 m-0" id="first_name" wire:model='first_name'>
@error('first_name') 
<span class="text-danger fs-4">{{ $message }}</span> 
@enderror
</div>
<div>
<label class="text-dark float-start p-0 fs-5 m-1" for="last_name">Last Name</label>
</div>
  <div class="form-group">
    <input value="" placeholder="Enter last name" type="text" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="last_name" wire:model='last_name'>
    @error('last_name') 
<span class="text-danger fs-4">{{ $message }}</span> 
@enderror  
</div>
  <div>
  <label class="text-dark float-start p-0 fs-5 m-1" for="email">Email</label>
  </div>
  <div class="form-group">
    <input value="" placeholder="Enter email" type="email" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="email" wire:model='email'>
    @error('email') 
<span class="text-danger fs-4">{{ $message }}</span> 
@enderror  
</div>
  <div>
  <label class="text-dark float-start p-0 fs-5 m-1" for="phone">Phone Number</label>
  </div>
  <div class="form-group">
    <input value="" placeholder="Enter phone number" type="number" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="phone" wire:model='phone'>
    @error('phone') 
<span class="text-danger fs-4">{{ $message }}</span> 
@enderror  
</div>
  <div>
  <label class="text-dark float-start p-0 fs-5 m-1" for="job_type">Job Type</label>
  </div>
  <div class="form-group">
    <input value="" placeholder="Enter job type" type="text" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="job_type" wire:model='job_type'>
    @error('job_type') 
<span class="text-danger fs-4">{{ $message }}</span> 
@enderror  
</div>
  <div>
  <label class="text-dark float-start p-0 fs-5 m-1" for="service_location">Service Location</label>
  </div>
  <div class="form-group">
    <input value="" placeholder="Enter service location" type="text" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="service_location" wire:model='service_location'>
    @error('service_location') 
<span class="text-danger fs-4">{{ $message }}</span> 
@enderror  
</div>
  <div>
  <button type="submit" class="btn btn-success col-12">Submit</button>
  </div>
  </div>
</form>
</div>
</body>
</html>
