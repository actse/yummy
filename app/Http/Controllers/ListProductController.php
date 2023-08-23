<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type_product;
class ListProductController extends Controller
{
    //
    function fetch_list_typeproduct(){
        return Type_product::get();
    }

    function fetch_list_product(){

        return Product::get();

    }

    function edit_product(){

    }

    function delete_product(){

    }
}
