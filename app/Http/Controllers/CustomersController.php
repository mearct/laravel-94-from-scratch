<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomersController extends Controller
{
    public function list()
    {
        $activeCustomers = Customer::active() -> get();
        $inactiveCustomers = Customer::inactive( ) -> get();

        return view( 'internals.customers', compact( 'activeCustomers', 'inactiveCustomers' ));
    }

    public function store()
    {
        $data = request() -> validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'active' => 'required'
        ]);

        Customer::create( $data );

        return back();
    }
}
