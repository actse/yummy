<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insert_cart_table;

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
            'status' => 'รอเตรียมการ',
            'product_id' => '1',
            'bill_id' => '1',
            'product_count' => '6',
            'product_comment' => '',
            'custom_name' => 'AA',
            'ordered_at' => '2023-08-11',
            'accepted_at' => '2023-08-11',
            'finished_at' => '2023-08-11'
        ]);


        // $isInsertSuccess->save();

        if ($isInsertSuccess != '') {
            return 'succruss';
        } else {
            echo 'Fail';
        }
    }

}
