<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\MobileModel;

class RelationLaravel extends Controller
{
    public function welcome()
    {
        // $mobile = Customer::find(1)->mobile_models;
        $data['customer'] = MobileModel::find(1)->customer;
        // echo "<pre>";
        // print_r($data['customer']);
        // // print_r($mobile);
        // echo "</pre>";
        // die;
        return view('welcome', $data);
    }
    public function add_data()
    {
        $mobile = new MobileModel();
        $mobile->model = "Oppo";
        // $mobile->save();
        $customer = new Customer();
        $customer->name = "Ankit";
        $customer->save();
        $customer->mobile_models()->save($mobile);
    }
}
