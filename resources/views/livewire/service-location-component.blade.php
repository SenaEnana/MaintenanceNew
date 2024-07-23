<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service location</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body><div wire:ignore.self>
         <div class="ms-3">
              <p class="fs-4 text-dark text-center fw-bold">
            Add Service Location
              </p>
            </div>
<form wire:submit.prevent="submit" 
class="form-group rounded border col-6 ms-5 ms-4 bg-light container ">
            <div class="col-8 row">
            <div>
  <label class="text-dark float-start p-0 fs-5 m-1" 
  for="locations_id">Service location Id</label>
  </div>
<div class="form-group">
<input type="text" placeholder="Enter location id" 
class="form-control text-dark fw-lighter fs-6 m-0" id="locations_id" wire:model='locations_id'>
@error('locations_id') 
<span class="text-danger fs-4">{{ $message }}</span> 
@enderror
</div>
<div>
    <label class="text-dark float-start p-0 fs-5 center m-1" 
    for="name">Service location name</label>
    </div>
  <div class="form-group">
    <input type="text" placeholder="Enter service location name" 
    class="form-control text-dark fw-lighter fs-6 m-0" id="name" wire:model='name'>
@error('name') 
<span class="text-danger fs-4">{{ $message }}</span> 
@enderror
</div>
<div>
    <label class="text-dark float-start p-0 fs-5 m-1" 
    for="street">Address</label>
    </div>
    <div class="form-group">
        <input type="text" placeholder="Enter street or address" 
        class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" 
        id="street" wire:model='street'>
        @error('street') 
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
