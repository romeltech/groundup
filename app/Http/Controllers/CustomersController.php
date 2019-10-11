<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller
{
    public function list(){
        // Scopes
        $activeCustomers = Customer::active()->get();
        $inActiveCustomers = Customer::inactive()->get();
        $companies = Company::all();
        return view('internals.customers', compact('activeCustomers', 'inActiveCustomers', 'companies'));
    }
    public function store(){

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required'
        ]);

        Customer::create($data);

        // $customers = new Customer();
        // $customers->name = request('name');
        // $customers->email = request('email');
        // $customers->active = request('active');
        // $customers->save();
        return back();
    }
}
