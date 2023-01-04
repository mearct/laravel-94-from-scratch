<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomersController extends Controller
{
    public function list()
    {
        $customers = Customer::all();

        return view( 'internals.customers', [
            'customers' => $customers,
        ]);
    }

    public function store()
    {
        $data = request() -> validate([
            'name' => 'required|min:3',
            'email' => 'required'
        ]);

        $customers = new Customer();
        $customers -> name = request( 'name' );
        $customers -> email = request( 'email' );
        $customers -> save();

        return back();
    }
}
