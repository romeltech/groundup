@extends('layout')

@section('title', 'Customer List')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="customers" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}">
                </div>
                <div>{{ $errors->first('name') }}</div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}">
                </div>
                <div>{{ $errors->first('email') }}</div>
                
                <button type="submit" class="btn btn-primary">Add Customer</button>
            </form>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-12">
            <ul>
                @foreach ($customers as $customer)
                <li>{{ $customer->name }} <span>({{ $customer->email }})</span></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection