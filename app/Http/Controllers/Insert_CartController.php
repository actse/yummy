<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insert_cart_table;

class Insert_CartController extends Controller
{

    function DataInsert(Reqeust $reqeust){

        $table_id = $reqeust->input('table_id');
        $key_name = $reqeust->input('key_name');
        $name_menu = $reqeust->input('name_menu');
        $image = $reqeust->input('image');
        $amount = $reqeust->input('amount');
        $comment = $reqeust->input('comment');
        $status = $reqeust->input('status');

        $isInsertSuccress = Insert_cart_table::insert([
            'table_id' => $table_id,
            'key_name' => $key_name,
            'name_menu' => $name_menu,
            'image' => $image,
            'amount' => $amount,
            'comment' => $comment,
            'status' => $status,
        ]);
        if($isInsertSuccress)return view('MenuCustomer');
        else echo 'Fail';
    }
}
