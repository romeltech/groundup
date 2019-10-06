<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function list(){
        // Scopes
        $activeCustomers = Customer::active()->get();
        $inActiveCustomers = Customer::inactive()->get();
        return view('internals.customers', compact('activeCustomers', 'inActiveCustomers'));
    }
    public function store(){

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required'
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
