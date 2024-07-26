<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\TechnicianList;
use App\Livewire\RequestComponent;
use App\Livewire\TechnicianComponent;
use App\Livewire\CustomerComponent;
use App\Livewire\RequestTypeComponent;
use App\Livewire\ServiceLocationComponent;
use App\Livewire\JobTypeComponent;
use App\Livewire\EquipmentComponent;
use App\Livewire\CustomerList;
use App\Livewire\RequestList;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/customers', CustomerComponent::class)->name('customer-component');
Route::get('/technicians', TechnicianComponent::class)->name('technician-component');
Route::get('/request', RequestComponent::class)->name('request-component');
Route::get('/requestType', RequestTypeComponent::class)->name('request-type-component');
Route::get('/serviceLocation', ServiceLocationComponent::class)->name('service-location-component');
Route::get('/jobTypes', JobTypeComponent::class)->name('job-type-component');
Route::get('/equipments', EquipmentComponent::class)->name('equipment-component');
Route::get('/customerList', CustomerList::class)->name('customer-list');
Route::get('/technicianList', TechnicianList::class)->name('technician-list');
Route::get('/requestList', RequestList::class)->name('request-list');

require __DIR__.'/auth.php';
