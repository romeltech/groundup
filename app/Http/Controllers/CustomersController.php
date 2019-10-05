<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function list(){
        $activeCustomers = Customer::where('active', 1)->get();
        $inActiveCustomers = Customer::where('active', 0)->get();
        // return view('internals.customers', [
        //     'activeCustomers' => $activeCustomers,
        //     'inActiveCustomers' => $inActiveCustomers,
        // ]);
        return view('internals.customers', compact('activeCustomers', 'inActiveCustomers'));
    }
    public function store(){

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required'
        ]);

        $customers = new Customer();
        $customers->name = request('name');
        $customers->email = request('email');
        $customers->active = request('active');
        $customers->save();
        return back();
    }
}
