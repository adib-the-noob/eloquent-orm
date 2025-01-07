<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// models
use App\Models\Customer;
use App\Models\Mobile;

class CustomerController extends Controller
{
    public function add_customer(Request $request){
        $request->validate([
            "customer_name"=> "required|string",
            "mobile_model"=> "required|string",
            "email"=> "required|email",
        ]);
    
        $customer = Customer::create([
            "name"=> $request->customer_name,
            "email"=> $request->email,
            ]);

        $mobile = Mobile::create([
            "model"=> $request->mobile_model,
            "customer_id"=> $customer->id
            ]);
        $customer->mobile()->save($mobile);
        return response()->json([
            "customer"=> $customer,
            "mobile"=> $mobile,
        ]);    

    }

    public function get_mobile_info(Request $request, $customer_id){
        $data = Customer::with('mobile')->find($customer_id);
        return response([
            "customer"=> $data,
        ], 200);
    }
}
