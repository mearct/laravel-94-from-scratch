<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Company;
class CustomersController extends Controller
{
    public function list()
    {
        $activeCustomers = Customer::active() -> get();
        $inactiveCustomers = Customer::inactive() -> get();
        $companies = Company::all();
        return view( 'internals.customers', compact( 'activeCustomers', 'inactiveCustomers', 'companies' ));
    }

    public function store()
    {
        $data = request() -> validate([
            'name'          => 'required|min:3',
            'email'         => 'required',
            'active'        => 'required',
            'company_id'    => 'required'
        ]);

        Customer::create( $data );

        return back();
    }
}
