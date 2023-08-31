<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Bills;


class TableController extends Controller
{
    function create_table(Request $request)
    {

        // $date_stamp = date('y-m-d h:i:s');
        // $name = ['A1', 'A2', 'A3', 'A4', 'A5', 'B1', 'B2', 'B3', 'B4', 'B5', 'C1', 'C2', 'C3', 'C4', 'C5', 'D1', 'D2', 'D3', 'D4', 'D5'];
        // $array = range(1, 20);

        // $records = [];

        // foreach ($array as $item) {
        //     $records[] = [
        //         'table_name' => $name[$item - 1],
        //         'table_type' => 4,
        //         'table_status' => 0,
        //         'created_at' => $date_stamp,
        //         'updated_at' => $date_stamp,
        //     ];
        // }

        // Table::insert($records);
    }
    function select_table()
    {
        return Table::get();
    }

    function joindata()
    {

        // return Bills::join('shop_tables', 'bills.table_id', '=', 'shop_tables.id')
        //     ->select('bills.id','bills.table_id','bills.shop_id', 'bills.staff_id', 'bills.reference_code', 'bills.customer_adult', 'bills.customer_children', 'bills.customer_baby', 'bills.package_main', 'bills.package_secondary', 'bills.registered_at', 'shop_tables.*')
        //     ->get();

        return Bills::join('shop_tables', 'bills.table_id', '=', 'shop_tables.id')
            ->select(
                'bills.id',
                'bills.table_id',
                'bills.shop_id',
                'bills.staff_id',
                'bills.reference_code',
                'bills.customer_adult',
                'bills.customer_children',
                'bills.customer_baby',
                'bills.package_main',
                'bills.package_secondary',
                'bills.registered_at',
                'shop_tables.table_name',
                'shop_tables.table_type',
                'shop_tables.table_status'
            )
            ->get();
    }
}
