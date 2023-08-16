<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Fetch_cart_product;
use Illuminate\Http\Response;

class FetchCartProductController extends Controller
{

    function Select_Product_cart()
    {

        $cartProducts = Fetch_cart_product::all();

        $cartProducts_list = [];

        if ($cartProducts != '') {

            foreach ($cartProducts as $item) {

                if($item->bill_id == 'null' && $item->status == '0'){

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

            }

            // dd($cartProducts_list);
            return $cartProducts_list;

        } else {
            echo 'fail';
        }
    }
}
