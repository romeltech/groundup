@extends('layout')

@section('content')    
    <h1>Customers</h1>

    <form action="customers" method="POST" class="pb-5">
        @csrf
        <label for="name">Name</label>
        <div class="input-group pb-3">
            <input type="text" name="name" id="name" value="{{old('name')}}">
        </div>
        <div>{{ $errors->first('name') }}</div>
        
        <label for="email">Email</label>
        <div class="input-group pb-3">
            <input type="email" name="email" id="email" value="{{old('email')}}">
        </div>
        <div>{{ $errors->first('email') }}</div>
        
        <button type="submit" class="btn btn-primary">Add Customer</button>
    </form>

    <ul>
        @foreach ($customers as $customer)
        <li>{{ $customer->name }} <span>({{ $customer->email }})</span></li>
        @endforeach
    </ul>
@endsection