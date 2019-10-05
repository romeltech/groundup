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
                
                <div class="form-group">
                    <label for="email">Status</label>
                    <select name="active" id="active" class="form-control">
                        <option value="" disabled>Select Customer Status</option>
                        <option value="1" >Active</option>
                        <option value="0" >Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add Customer</button>
            </form>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-6">
            <h3>Active Customers</h3>
            <ul>
                @foreach ($activeCustomers as $activeCustomer)
                <li>{{ $activeCustomer->name }} <span>({{ $activeCustomer->email }})</span></li>
                @endforeach
            </ul>
        </div>
        
        <div class="col-6">
            <h3>Inactive Customers</h3>
            <ul>
                @foreach ($inActiveCustomers as $inActiveCustomer)
                <li>{{ $inActiveCustomer->name }} <span>({{ $inActiveCustomer->email }})</span></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection