<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    //
    function add_staff(Request $request)
    {

        $staff_name = $request->input('staff_name');
        $staff_gender = $request->input('staff_gender');
        $id_card = $request->input('id_card');
        $staff_birthday = $request->input('staff_birthday');
        $staff_position = $request->input('staff_position');
        $phone_number = $request->input('phone_number');
        $staff_address = $request->input('staff_address');
        $date_stamp = date('y-m-d h:i:s');

        return Staff::insert([
            'staff_name' => $staff_name,
            'staff_gender' => $staff_gender,
            'id_card' => $id_card,
            'staff_birthday' => $staff_birthday,
            'staff_position' => $staff_position,
            'phone_number' => $phone_number ,
            'staff_address' => $staff_address,
            'created_at' => $date_stamp,
            'updated_at' => $date_stamp,
        ]);
    }

    function fetch_staff()
    {
        return Staff::get();
    }

    function edit_staff(Request $request)
    {

        date_default_timezone_set('Asia/Bangkok');

        $staff_id = $request->input('staff_id');
        $staff_name = $request->input('staff_name');
        $staff_gender = $request->input('staff_gender');
        $id_card = $request->input('id_card');
        $staff_birthday = $request->input('staff_birthday');
        $staff_position = $request->input('staff_position');
        $phone_number = $request->input('phone_number');
        $staff_address = $request->input('staff_address');
        $date_stamp = date('y-m-d h:i:s');

        $isUpdateSuccess = Staff::where('id', '=', $staff_id)->update([
            'staff_name' => $staff_name,
            'staff_gender' => $staff_gender,
            'id_card' => $id_card,
            'staff_birthday' => $staff_birthday,
            'staff_position' => $staff_position,
            'phone_number' => $phone_number,
            'staff_address' => $staff_address,  
            'updated_at' => $date_stamp,

        ]);

        if ($isUpdateSuccess != '') {
            return 'success';
        } else {
            echo 'Fail';
        }
    }

    function delete_staff(Request $request)
    {
        date_default_timezone_set('Asia/Bangkok');

        $staff_id = $request->input('staff_id');

        $isDeleteSuccess = Staff::where('id', '=', $staff_id)->delete();

        if ($isDeleteSuccess != '') {
            return 'success';
        } else {
            echo 'Fail';
        }
    }
}
