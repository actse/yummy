<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Package;
use App\Models\Package_secondary;
use App\Models\Type_product;

class ProductController extends Controller
{
    //
    function addNewProduct(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        $product_image = $request->input('product_image');


            $product_name = $request->input('product_name');
            $product_detail = $request->input('product_detail');
            $product_price = $request->input('product_price');
            $type_product_id = $request->input('type_product_id');
            $product_image = $request->input('product_image');
            $date_stamp = date('y-m-d H:i:s');

            $product_image = 'image.jpg';
            // $imageName = time() . '_' . $product_image->getClientOriginalName();
            // $product_image->move(public_path('resources/imgs'), $imageName);

            return Product::insert([
                'product_name' => $product_name,
                'product_image' => $product_image,
                'product_detail' => $product_detail,
                'product_price' => $product_price,
                'type_product_id' => $type_product_id,
                'created_at' => $date_stamp,
                'updated_at' => $date_stamp,
            ]);
        // }

        // return ('fail');

    }

    function fetchProduct()
    {
        return Product::get();
    }
}
