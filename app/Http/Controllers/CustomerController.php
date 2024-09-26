<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    
    public function index() {
        return Customer::get();
    }

    public function create() {

    }


    public function store(Request $request, Customer $customer) {
        $fields = $request->validate(
            [
            'name' => 'required',
            'age' => 'required|gt:0|lt:100',
            'mobile_no' => '',
            'email' => 'email'
            ]
        );

        $customer = Customer::create($fields);
        return $customer;
    }

    public function show(Customer $customer) {
        return $customer;
    }

    public function edit() {
        
    }

    public function update(Request $request, Customer $customer) {
        $fields = $request->validate(
            [
            'name' => 'required',
            'age' => 'required|gt:0|lt:100',
            'mobile_no' => '',
            'email' => 'email'
            ]
        );
    
        $customer = Customer::update($fields);
        return $customer;
    
    }

    public function destroy(Customer $customer) {
        $customer->delete();
        return 'Customer has been deleted.';
    }
}
