<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\MobileModel;

class RelationLaravel extends Controller
{
    public function welcome()
    {
        $data['mobile'] = MobileModel::with('customer')->get();
        $data['customers'] = Customer::with('mobile_models')->get();
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
