<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type_product;

class ListProductController extends Controller
{
    //
    function fetch_list_typeproduct()
    {
        return Type_product::get();
    }

    function fetch_list_product()
    {

        return Product::get();
    }

    function edit_product(Request $request)
    {

        date_default_timezone_set('Asia/Bangkok');

        $product_id = $request->input('product_id');
        $product_name = $request->input('product_name');
        $product_image = $request->input('product_image');
        $product_detail = $request->input('product_detail');
        $product_price = $request->input('product_price');
        $type_product_id = $request->input('type_product_id');

        $date_stamp = date('y-m-d H:i:s');

        $isUpdateSuccess = Product::where('id', '=', $product_id)->update([
            'product_name' => $product_name,
            'product_image' => $product_image,
            'product_detail' => $product_detail,
            'product_price' => $product_price,
            'type_product_id' => $type_product_id,
            'created_at' => $date_stamp,
            'updated_at' => $date_stamp,
        ]);

        if ($isUpdateSuccess != '') {
            return 'success';
        } else {
            echo 'Fail';
        }
    }

    function delete_product(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        $id = $request->input('product_id');

        $isDeleteSuccess = Product::where('id', '=', $id)->delete();

        if ($isDeleteSuccess != '') {
            return 'success';
        } else {
            echo 'Fail';
        }
    }
}
