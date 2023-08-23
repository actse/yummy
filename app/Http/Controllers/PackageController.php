<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Package;
use App\Models\Package_secondary;
use App\Models\Type_product;
class PackageController extends Controller
{
    //
    function addNewPackage(Request $request)
    {
        // date_default_timezone_set('Asia/Bangkok');

        $package_name = $request->input('package_name');
        $package_price = $request->input('package_price');
        $date_stamp = date('y-m-d h:i:s');

        return Package::insert([
            'package_name' => $package_name,
            'package_price' => $package_price,
            'created_at' => $date_stamp,
            'updated_at' => $date_stamp,
        ]);
    }

    function fetchPackage()
    {
        return Package::get();
    }
}
