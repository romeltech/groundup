@extends('layouts.app')

@section('title', 'Customer List')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers</h1>
            <a href="customers/create">Create New Customer</a>
        </div>
    </div>

    @foreach ($customers as $customer)
        <div class="row">
            <div class="col-2">{{ $customer->id }}</div>
            <div class="col-4"><a href="{{ route('customers.show', ['customer' => $customer] ) }}">{{ $customer->name }}</a></div>
            <div class="col-4">{{ $customer->company->name }}</div>
            <div class="col-2">{{ $customer->active }}</div>
        </div>
    @endforeach

    <div class="row mt-5">
        <div class="col-12 text-center">
            {{ $customers->links() }}
        </div>
    </div>

@endsection