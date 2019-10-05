<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function list(){

        $customers = Customer::all();

        return view('internals.customers', [
            'customers' => $customers,
        ]);
    }
}
