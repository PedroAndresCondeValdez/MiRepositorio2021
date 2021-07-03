<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function getProducts() {
        return Product::all();
    }

    public function getProductsAll(){
        return view('productslist', [
            'products' => Product::all()
        ]);
    }

    public function showNewProduct() {
        return view('newproduct');
    }
    public function postProduct(Request $request) {
        try {
            DB::beginTransaction();
            $requestData = $request->all();
            Product::create([
                'name' => $requestData['name'],
                'price' => $requestData['price'],
                'description' => $requestData['description'],
                'photo' => $requestData['photo'],
            ]);

            DB::commit();
        } catch (Exception $ex) {
            DB::rollback();
        }
        return redirect('/products');
    }
}
