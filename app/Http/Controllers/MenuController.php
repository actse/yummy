<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type_product;
use App\Models\Package;

class MenuController extends Controller
{
    public function list_menu(Request $request)
    {

        date_default_timezone_set('Asia/Bangkok');
        $table_id = 3;
        $package_id = 2;

        $package = Package::select('type_product_id')->where('id', '=', $package_id)->first();

        if ($package) {
            $typeProductIds = explode(',', $package->type_product_id);

            $products = Product::whereIn('type_product_id', $typeProductIds)
                ->join('type_product', 'type_product.id', '=', 'products.type_product_id')
                ->select('products.*', 'type_product.type_product_name')
                ->get();

            $groupedProducts = [];
            foreach ($products as $product) {
                $typeProductId = $product->type_product_id;

                if (!isset($groupedProducts[$typeProductId])) {
                    $groupedProducts[$typeProductId] = [
                        'type_product_id' => $product->type_product_id,
                        'type_product_name' => $product->type_product_name,
                        'products' => [],
                    ];
                }

                $groupedProducts[$typeProductId]['products'][] = $product;
            }

            return $groupedProducts;
        } else {
            return [];
        }

    }
}
