<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insert_cart_table;
use Carbon\Carbon;

class Insert_CartController extends Controller
{

    function DataInsert(Request $request) {

        $table_id = $request->input('table_id');
        $key_name = $request->input('key_name');
        $name_menu = $request->input('name_menu');
        $image = $request->input('image');
        $amount = $request->input('amount');
        $comment = $request->input('comment');
        $status = $request->input('status');

        $isInsertSuccess = Insert_cart_table::insert([
            'product_name' => $name_menu,
            'bill_id' => $table_id,
            'product_count' => $amount,
            'product_comment' => '',
            'custom_name' => 'AA',
            'ordered_at' => '2023-08-16',
            'accepted_at' => '2023-08-16',
            'finished_at' => '2023-08-16',
            'status' => $status,
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now()
        ]);


        // $isInsertSuccess->save();

        if ($isInsertSuccess != '') {
            return 'success';
        } else {
            echo 'Fail';
        }
    }

}
