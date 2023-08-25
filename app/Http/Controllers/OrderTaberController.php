<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bills;

class OrderTaberController extends Controller
{
    //
    function insert_table(Request $request)
    {

        $date_stamp = date('y-m-d h:i:s');
        $isSuccess = Bills::insert([
            'shop_id' => $request->input('shop_id'),
            'staff_id' => $request->input('staff_id'),
            'reference_code' => $request->input('reference_code'),
            'table_number' => $request->input('table_number'),
            'customer_adult' => $request->input('customer_adult'),
            'customer_children' => $request->input('customer_children'),
            'customer_baby' => $request->input('customer_baby'),
            'package' => $request->input('package'),
            'registered_at' => $date_stamp,
            'created_at' => $date_stamp,
            'updated_at' => $date_stamp,


        ]);

        if ($isSuccess != '') {
            return 'success';
        } else {
            echo 'Fail';
        }
    }
    function edit_table(Request $request)
    {
        $date_stamp = date('y-m-d h:i:s');
        $bills_id = $request->input('bills_id');
        $isUpdateSuccess = Bills::where('id', '=', $bills_id)->update([
            'shop_id' => $request->input('shop_id'),
            'staff_id' => $request->input('staff_id'),
            'reference_code' => $request->input('reference_code'),
            'table_number' => $request->input('table_number'),
            'customer_adult' => $request->input('customer_adult'),
            'customer_children' => $request->input('customer_children'),
            'customer_baby' => $request->input('customer_baby'),
            'package' => $request->input('package'),
            'registered_at' => $date_stamp,
            'created_at' => $date_stamp,
            'updated_at' => $date_stamp,

        ]);

        if ($isUpdateSuccess != '') {
            return 'success';
        } else {
            echo 'Fail';
        }
    }
    function edit_status_close(Request $request)
    {
        $date_stamp = date('y-m-d h:i:s');
        $bills_id = $request->input('bills_id');
        $status = $request->input('status');
        $isStatusSuccess = Bills::where('id', '=', $bills_id)->update([
            'shop_id' => $request->input('shop_id'),
            'staff_id' => $request->input('staff_id'),
            'reference_code' => $request->input('reference_code'),
            'table_number' => $request->input('table_number'),
            'customer_adult' => $request->input('customer_adult'),
            'customer_children' => $request->input('customer_children'),
            'customer_baby' => $request->input('customer_baby'),
            'package' => $request->input('package'),
            'registered_at' => $date_stamp,
            'created_at' => $date_stamp,
            'updated_at' => $date_stamp,

        ]);

        if ($isStatusSuccess != '') {
            return 'success';
        } else {
            echo 'Fail';
        }
    }
    function payment_status_close()
    {
    }
}
