<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package_secondary;


class SecondaryPackageController extends Controller
{
    //

    function insert(Request $request)
    {

        date_default_timezone_set('Asia/Bangkok');
        // $package_secondary_name = $request->input('package_secondary_name');
        // $package_price = $request->input('package_secondary_price');
        $date_stamp = date('y-m-d H:i:s');

        return Package_secondary::insert([
            'title_package' => $request->input('package_secondary_name'),
            'package_price' => $request->input('package_secondary_price'),
            'created_at' => $date_stamp,
            'updated_at' => $date_stamp,
        ]);
    }
    function select()
    {
        return Package_secondary::get();
    }
    function edit(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');
        $package_secondary_id = $request->input('package_secondary_id');
        $package_secondary_name = $request->input('package_secondary_name');
        // $package_price = $request->input('package_price');
        $date_stamp = date('y-m-d H:i:s');

        $isUpdateSuccess = Package_secondary::where('id', '=', $package_secondary_id)->update([
            'title_package' => $package_secondary_name,
            'updated_at' => $date_stamp,

        ]);

        if ($isUpdateSuccess != '') {
            return 'success';
        } else {
            echo 'Fail';
        }
    }
    function delete(Request $request)
    {

        $package_secondary_id = $request->input('package_secondary_id');

        $isDeleteSuccess = Package_secondary::where('id', '=', $package_secondary_id)->delete();

        if ($isDeleteSuccess != '') {
            return 'success';
        } else {
            echo 'Fail';
        }
    }
}
