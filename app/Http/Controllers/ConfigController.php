<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Package;
use App\Models\Package_secondary;
use App\Models\Type_product;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    function addNewProduct(Request $request)
    {

        $product_image = $request->input('product_image');

        if ($product_image != '') {

            $product_name = $request->input('product_name');
            $product_detail = $request->input('product_detail');
            $product_price = $request->input('product_price');
            $type_product_id = $request->input('type_product_id');
            $product_image = $request->input('product_image');
            $date_stamp = date('y-m-d h:i:s');

            $imageName = time() . '_' . $product_image->getClientOriginalName();
            $product_image->move(public_path('resources/imgs'), $imageName);

            return Product::insert([
                'product_name' => $product_name,
                'product_image' => $product_image,
                'product_detail' => $product_detail,
                'product_price' => $product_price,
                'type_product_id' => $type_product_id,
                'created_at' => $date_stamp,
                'updated_at' => $date_stamp,
            ]);
        }

        return ('fail');

        // return Product::insert([
        //     'product_name' => $product_name,
        //     'product_image' => $product_image,
        //     'product_detail' => $product_detail,
        //     'product_price' => $product_price,
        //     'type_product_id' => $type_product_id,
        //     'created_at' => $date_stamp,
        //     'updated_at' => $date_stamp,
        // ]);
    }

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
    function fetchPackage()
    {
        return Package::get();
    }

    function fetchTypeProduct()
    {
        return Type_product::get();
    }

    function fetchProduct()
    {
        return Product::get();
    }
}
