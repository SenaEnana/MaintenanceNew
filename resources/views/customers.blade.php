@extends('layouts.app')

@section('content')
    <div class="container m-5">
        <div>
            <p class="m-2 fs-1 fw-bold" style="text-align: center;">Customers</p>
        </div>
        
        @livewire('customer-component')
    </div>
@endsection
