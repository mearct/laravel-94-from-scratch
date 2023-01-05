<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomersController extends Controller
{
    public function list()
    {
        $activeCustomers = Customer::where( 'active', 1 ) -> get();
        $inactiveCustomers = Customer::where( 'active', 0 ) -> get();
        // $customers = Customer::all();

        return view( 'internals.customers', compact( 'activeCustomers', 'inactiveCustomers' ));
    }

    public function store()
    {
        $data = request() -> validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'active' => 'required'
        ]);

        $customers = new Customer();
        $customers -> name = request( 'name' );
        $customers -> email = request( 'email' );
        $customers -> active = request( 'active' );
        $customers -> save();

        return back();
    }
}
