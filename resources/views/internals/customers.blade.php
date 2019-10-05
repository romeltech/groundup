@extends('layout')

@section('content')    
    <h1>Customers</h1>

    <form action="customers" method="POST" class="pb-5">
        @csrf
        <div class="input-group pb-3">
            <input type="text" name="name" id="name">
        </div>
        <div>{{ $errors->first('name') }}</div>
        
        <button type="submit" class="btn btn-primary">Add Customer</button>
    </form>

    <ul>
        @foreach ($customers as $customer)
        <li>{{ $customer->name }}</li>
        @endforeach
    </ul>
@endsection