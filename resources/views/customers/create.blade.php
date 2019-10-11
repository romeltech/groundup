@extends('layout')

@section('title', 'Add New Customer')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Customer</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers" method="POST">
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

                <div class="form-group">
                    <label for="company_id">Company</label>
                    <select name="company_id" id="company_id" class="form-control">
                        @foreach ($companies as $company)
                            <option value="{{ $company->id}}" >{{ $company->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add Customer</button>
            </form>
        </div>
    </div>
{{-- 
    <hr>

    <div class="row">
        <div class="col-6">
            <h3>Active Customers</h3>
            <ul>
                @foreach ($activeCustomers as $activeCustomer)
                <li>{{ $activeCustomer->name }} <span>({{ $activeCustomer->company->name }})</span></li>
                @endforeach
            </ul>
        </div>
        
        <div class="col-6">
            <h3>Inactive Customers</h3>
            <ul>
                @foreach ($inActiveCustomers as $inActiveCustomer)
                <li>{{ $inActiveCustomer->name }} <span>({{ $inActiveCustomer->company->name }})</span></li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @foreach ($companies as $company)
                <h3>{{$company->name}}</h3>
                <ul>
                    @foreach ($company->customers as $customer)
                        <li> {{$customer->name}}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div> --}}

@endsection