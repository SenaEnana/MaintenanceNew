<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', App\Livewire\EmployeeComponent::class);
Route::get('/technicians', App\Livewire\TechnicianComponent::class);
Route::get('/customers', App\Livewire\Customer::class);
