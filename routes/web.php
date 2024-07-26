<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/technicians', App\Livewire\TechnicianComponent::class);
Route::get('/customers', App\Livewire\CustomerComponent::class);
Route::get('/request', App\Livewire\RequestComponent::class);
Route::get('/requestType', App\Livewire\RequestTypeComponent::class);
Route::get('/serviceLocation', App\Livewire\ServiceLocationComponent::class);
Route::get('/jobTypes', App\Livewire\JobTypeComponent::class);
Route::get('/equipments', App\Livewire\EquipmentComponent::class);
Route::get('/customerList', App\Livewire\CustomerList::class);
Route::get('/technicianList', App\Livewire\TechnicianList::class);
Route::get('/requestList', App\Livewire\RequestList::class);

require __DIR__.'/auth.php';
