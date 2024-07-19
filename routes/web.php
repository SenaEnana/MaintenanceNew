<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/employees', App\Livewire\EmployeeComponent::class);
Route::get('/technicians', App\Livewire\TechnicianComponent::class);
Route::get('/customers', App\Livewire\Customer::class);

require __DIR__.'/auth.php';
