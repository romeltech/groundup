@extends('layouts.app')

@section('title', 'Details for '. $customer->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Details for {{ $customer->name }}</h1>
            <div style="display:flex;">
                <a href="{{ route('customers.edit', ['customer' => $customer] ) }}" class="btn btn-info">Edit</a>
                <form action="{{ route('customers.destroy', ['customer' => $customer] ) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Name: </strong>{{ $customer->name }}</p>
            <p><strong>Email: </strong>{{ $customer->email }}</p>
            <p><strong>Company: </strong>{{ $customer->company->name }}</p>
        </div>
    </div>

    @if ($customer->image)
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('storage/'.$customer->image) }}" alt="" class="thumbnail" style="width:200px;height:auto;">
            </div>
        </div>
    @endif

@endsection