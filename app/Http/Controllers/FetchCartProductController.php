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

        $cartProducts = Fetch_cart_product::select(
            'product_name',
            'bill_id',
            'product_count',
            'product_comment',
            'custom_name',
            'ordered_at',
            'accepted_at',
            'finished_at',
            'status'
        )
            ->where([
                ['bill_id', '=', '1'],
                ['status', '<>', '0'],
            ])
            ->get();

        if ($cartProducts != '') {

            $response = [];

            foreach ($cartProducts as $product) {

                $response = $product->product_name;
                $response = $product->bill_id;
                $response = $product->product_count;
                $response = $product->product_comment;
                $response = $product->custom_name;
                $response = $product->ordered_at;
                $response = $product->accepted_at;
                $response = $product->finished_at;
                $response = $product->status;
            }

            return $response;

        } else {
            echo 'fail';
        }
    }
}
