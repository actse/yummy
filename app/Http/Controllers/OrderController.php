<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrderController extends Controller
{
    function addToCart(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        $table_id = $request->input('table_id');
        $key_name = $request->input('key_name');
        $name_menu = $request->input('name_menu');
        $image = $request->input('image');
        $amount = $request->input('amount');
        $comment = $request->input('comment');
        $status = $request->input('status');
        $date_stamp = date('y-m-d h:i:s');

        // return $date_stamp;

        $isInsertSuccess = Orders::insert([
            'product_name' => $name_menu,
            'bill_id' => $table_id,
            'product_count' => $amount,
            'product_comment' => '',
            'custom_name' => 'AA',
            'ordered_at' => $date_stamp,
            'accepted_at' => $date_stamp,
            'finished_at' => $date_stamp,
            'status' => $status,

        ]);

        if ($isInsertSuccess != '') {
            return 'success';
        } else {
            echo 'Fail';
        }
    }

    function fetchCart(Request $request)
    {

        $table_id = $request->input('table_id');

        $cartProducts = Orders::where('bill_id', '=', $table_id, 'AND', 'status', '=', '0')->get();

        $cartProducts_list = [];

        if ($cartProducts != '') {

            foreach ($cartProducts as $item) {

                $obj = [];

                $obj['product_name'] = $item->product_name;
                $obj['bill_id'] = $item->bill_id;
                $obj['product_count'] = $item->product_count;
                $obj['product_comment'] = $item->product_comment;
                $obj['custom_name'] = $item->custom_name;
                $obj['ordered_at'] = $item->ordered_at;
                $obj['accepted_at'] = $item->accepted_at;
                $obj['finished_at'] = $item->finished_at;
                $obj['status'] = $item->status;

                $cartProducts_list[] = (object) $obj;
            }

            // dd($cartProducts_list);
            return $cartProducts_list;
        } else {
            echo 'fail';
        }
    }

    function confirm()
    {
    }

    function fetchConfirmStatus()
    {
    }
}
