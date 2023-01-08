<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Company;
class CustomersController extends Controller
{
    public function index()
    {
        $customers =  Customer::all();
        return view( 'customers.index', compact( 'customers' ));
    }

    public function create()
    {
        $companies = Company::all();
        return view( 'customers.create', compact( 'companies' ) );
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

        return redirect( 'customers');
    }

    // public function show( $customer )
    // {
    //     // dd( $customer );
    //     $customer = Customer::where( 'id', $customer ) -> firstOrFail();

    //     return view( 'customers.show', compact( 'customer' ) );
    // }

    // route binding Customer is model
    public function show( Customer $customer )
    {
        return view( 'customers.show', compact( 'customer' ) );
    }
}
