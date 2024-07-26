@extends('layouts.app')

@section('content')
<div class="container m-5">
<div>
    <x-responsive-nav-link :href="route('request-component')" :active="request()->routeIs('request-component')" class="btn-sm float-end fw-bold" wire:navigate>
                {{ __('Add New Request') }}
            </x-responsive-nav-link>
    </div>
    <div>
        <p class="m-2 fs-4 fw-bold" style="text-align: center;">Maintenance Requests</p>
    </div>
    <table class="table table-hover text-dark w-100 fs-6">
        <thead>
            <tr>
                <th>Id</th>
                <th>Equipment</th>
                <th>Request Type</th>
                <th>Description</th>
                <th>Status</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($requests->count() > 0)
                @foreach ($requests as $request)
                    <tr>
                        <td>{{ $request->id }}</td>
                        <td>{{ $request->equipment ? $request->equipment->name : 'N/A' }}</td> <!-- Check if equipment exists -->
                        <td>{{ $request->requestType ? $request->requestType->name : 'N/A' }}</td> <!-- Check if request type exists -->
                        <td>{{ $request->description }}</td>
                        <td>{{ $request->status }}</td>
                        <td style="text-align: center;">
                            <button class="btn btn-sm btn-info">View</button>
                            <button class="btn btn-sm btn-secondary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" style="text-align:center"><small>No maintenance requests found</small></td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
