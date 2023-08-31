<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bills;
use App\Models\Table;


class OrderTaberController extends Controller
{

    function insert_table(Request $request)
    {

        $date_stamp = date('y-m-d h:i:s');

        $table_number = $request->input('table');

        $insertbill = Bills::insert([
            'shop_id' => $request->input('shop_id'),
            'staff_id' => $request->input('staff_id'),
            'reference_code' => $this->generateRandomString(8),
            'table_id' => $request->input('table'),
            'customer_adult' => $request->input('customer_adult'),
            'customer_children' => $request->input('customer_children'),
            'customer_baby' => $request->input('customer_baby'),
            'package_main' => $request->input('main_package'),
            'package_secondary' => $request->input('secondary_package'),
            'registered_at' => $date_stamp,
            'updated_at' => $date_stamp,

        ]);

        $inserttable =  Table::where('id', '=', $table_number)->update([
            'table_status' => 1,
            'created_at' => $date_stamp,
            'updated_at' => $date_stamp,


        ]);

        return [$insertbill, $inserttable];
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
        $bills_id = $request->input('bills_id');
        $table_number = $request->input('table');
        $new_table = $request->input('new_table');

        $insertbill = Bills::where('id', '=', $bills_id)->update([
            'shop_id' => $request->input('shop_id'),
            'staff_id' => $request->input('staff_id'),
            'reference_code' => $this->generateRandomString(8),
            'table_id' => $new_table,
            'customer_adult' => $request->input('customer_adult'),
            'customer_children' => $request->input('customer_children'),
            'customer_baby' => $request->input('customer_baby'),
            'package_main' => $request->input('main_package'),
            'package_secondary' => $request->input('secondary_package'),
            'registered_at' => $date_stamp,
            'updated_at' => $date_stamp,

        ]);

        if ($insertbill != []) {
            $newtable = Table::where('id', '=', $new_table)->update([
                'table_status' => 1,
                'created_at' => $date_stamp,
                'updated_at' => $date_stamp,

            ]);

            if ($newtable != []) {
                $oldtable = Table::where('id', '=', $table_number)->update([
                    'table_status' => 0,
                    'created_at' => $date_stamp,
                    'updated_at' => $date_stamp,


                ]);

                return [$insertbill, $newtable, $oldtable];
            }
        }

        echo 'Fail';
    }
    function edit_status_close(Request $request)
    {
        $date_stamp = date('y-m-d h:i:s');
        $bills_id = $request->input('bills_id');
        $table_number = $request->input('table_id');

        $deletebills = Bills::where('id', '=', $bills_id)->update([
            'shop_id' => 1,
            'staff_id' => 1,
            'reference_code' => $this->generateRandomString(8),
            'table_id' => 0,
            'customer_adult' => 0,
            'customer_children' => 0,
            'customer_baby' => 0,
            'package_main' => 0,
            'package_secondary' => 0,
            'registered_at' => $date_stamp,
            'updated_at' => $date_stamp,
        ]);

        if ($deletebills != []) {

            $cancelstatus = Table::where('id', '=', $table_number)->update([
                'table_status' => 0,
                'created_at' => $date_stamp,
                'updated_at' => $date_stamp,

            ]);
            return [$deletebills, $cancelstatus,];

        }
    }
    function reserve_table(Request $request)
    {

        $date_stamp = date('y-m-d h:i:s');
        $date_stamp = date('y-m-d h:i:s');
        $bills_id = $request->input('bills_id');
        $table_number = $request->input('table');

        $insertbill = Bills::where('id', '=', $bills_id)->update([
            'shop_id' => $request->input('shop_id'),
            'staff_id' => $request->input('staff_id'),
            'reference_code' => $this->generateRandomString(8),
            'table_id' => $table_number,
            'customer_adult' => $request->input('customer_adult'),
            'customer_children' => $request->input('customer_children'),
            'customer_baby' => $request->input('customer_baby'),
            'package_main' => $request->input('main_package'),
            'package_secondary' => $request->input('secondary_package'),
            'registered_at' => $date_stamp,
            'updated_at' => $date_stamp,

        ]);

        if ($insertbill != []) {
            $confirmtable = Table::where('id', '=', $table_number)->update([
                'table_status' => 2,
                'created_at' => $date_stamp,
                'updated_at' => $date_stamp,

            ]);

            return [$insertbill, $confirmtable,];
        }

        echo 'Fail';
    }
    function payment_status_close()
    {
    }
    function confirmreserve_table(Request $request)
    {

        $date_stamp = date('y-m-d h:i:s');
        $bills_id = $request->input('bills_id');
        $table_number = $request->input('table');
        $insertbill = Bills::where('id', '=', $bills_id)->update([
            'shop_id' => $request->input('shop_id'),
            'staff_id' => $request->input('staff_id'),
            'reference_code' => $this->generateRandomString(8),
            'table_id' => $table_number,
            'customer_adult' => $request->input('customer_adult'),
            'customer_children' => $request->input('customer_children'),
            'customer_baby' => $request->input('customer_baby'),
            'package_main' => $request->input('main_package'),
            'package_secondary' => $request->input('secondary_package'),
            'registered_at' => $date_stamp,
            'updated_at' => $date_stamp,
        ]);

        if ($insertbill != []) {
            $newtable = Table::where('id', '=', $table_number)->update([
                'table_status' => 1,
                'created_at' => $date_stamp,
                'updated_at' => $date_stamp,

            ]);

            return [$insertbill, $newtable];
        }

        echo 'Fail';
    }
    function select_bills()
    {
        return Bills::get();
    }
}
