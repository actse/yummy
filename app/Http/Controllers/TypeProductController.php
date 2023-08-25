<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Package;
use App\Models\Package_secondary;
use App\Models\Type_product;

class TypeProductController extends Controller
{
    //
    function addTypeProductidtoPackage(Request $request)
    {
        $package_id = $request->input('main_package_id');
        $type_product_id = $request->input('type_product_id');
        $date_stamp = date('y-m-d h:i:s');

        return Package::where('id', '=', $package_id)->update([
            'type_product_id' => $type_product_id,
            'created_at' => $date_stamp,
            'updated_at' => $date_stamp,
        ]);
    }

    function addNewTypeProduct(Request $request)
    {
        // date_default_timezone_set('Asia/Bangkok');

        $type_product_name = $request->input('type_product_name');
        $date_stamp = date('y-m-d h:i:s');

        return Type_product::insert([
            'type_product_name' => $type_product_name,
            'created_at' => $date_stamp,
            'updated_at' => $date_stamp,
        ]);
    }

    function fetchTypeProduct()
    {
        return Type_product::get();
    }

    function edit_type_product(Request $request)
    {

        date_default_timezone_set('Asia/Bangkok');

        $type_product_id = $request->input('type_product_id');
        $type_product_name = $request->input('type_product_name');
        $date_stamp = date('y-m-d h:i:s');

        $isUpdateSuccess = Type_product::where('id', '=', $type_product_id)->update([
            'type_product_name' => $type_product_name,
            'updated_at' => $date_stamp,

        ]);

        if ($isUpdateSuccess != '') {
            return 'success';
        } else {
            echo 'Fail';
        }
    }

    function delete_type_product(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        $type_product_id = $request->input('type_product_id');

        $isDeleteSuccess = Type_product::where('id', '=', $type_product_id)->delete();

        if ($isDeleteSuccess != '') {
            return 'success';
        } else {
            echo 'Fail';
        }
    }
}
