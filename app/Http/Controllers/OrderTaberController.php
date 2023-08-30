<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bills;

class OrderTaberController extends Controller
{

    function insert_table(Request $request)
    {

        $date_stamp = date('y-m-d h:i:s');

        $table_number = $request->input('table');

        return  Bills::where('table_number', '=', $table_number)->update([
            'shop_id' => $request->input('shop_id'),
            'staff_id' => $request->input('staff_id'),
            'reference_code' => $this->generateRandomString(8),
            'table_number' => $request->input('table'),
            'customer_adult' => $request->input('customer_adult'),
            'customer_children' => $request->input('customer_children'),
            'customer_baby' => $request->input('customer_baby'),
            'package_main' => $request->input('main_package'),
            'package_secondary' => $request->input('secondary_package'),
            'table_status' => $request->input('status'),
            'registered_at' => $date_stamp,
            'updated_at' => $date_stamp,

        ]);
    }
    function generateRandomString($length = 8)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }
    function edit_table(Request $request)
    {
        $date_stamp = date('y-m-d h:i:s');

        $table_number = $request->input('table');
        $new_table = $request->input('new_table');

        $isUpdateSuccess =  Bills::where('table_number', '=', $new_table)->update([
            'shop_id' => $request->input('shop_id'),
            'staff_id' => $request->input('staff_id'),
            'reference_code' => $this->generateRandomString(8),
            'table_number' => $new_table,
            'customer_adult' => $request->input('customer_adult'),
            'customer_children' => $request->input('customer_children'),
            'customer_baby' => $request->input('customer_baby'),
            'package_main' => $request->input('main_package'),
            'package_secondary' => $request->input('secondary_package'),
            'table_status' => $request->input('status'),
            'registered_at' => $date_stamp,
            'updated_at' => $date_stamp,

        ]);

        if ($isUpdateSuccess == true) {

            return Bills::where('table_number', '=', $table_number)->update([
                'shop_id' => 1,
                'staff_id' => 1,
                'reference_code' => $this->generateRandomString(8),
                'table_number' => $table_number,
                'customer_adult' => 0,
                'customer_children' => 0,
                'customer_baby' => 0,
                'package_main' => 0,
                'package_secondary' => 0,
                'table_status' => 0,
                'registered_at' => $date_stamp,
                'updated_at' => $date_stamp,

            ]);

        } else {
            echo 'Fail';
        }
    }
    function edit_status_close(Request $request)
    {
        $date_stamp = date('y-m-d h:i:s');
        $bills_id = $request->input('bills_id');
        // $status = $request->input('status');
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
    function select_table()
    {
        return Bills::get();
    }
}
