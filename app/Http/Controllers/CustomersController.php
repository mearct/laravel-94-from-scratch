<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = [
            'John Doe',
            'Jane Doe',
            'Bob The Builder',
            'add',
        ];

        return view( 'internals.customers', [
            'customers' => $customers,
        ]);
    }

}
