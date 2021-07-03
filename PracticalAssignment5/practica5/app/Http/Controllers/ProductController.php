<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    //Comenzamos haciendo sus respectivas clases, getProducts que sera
    //llamado para la clase Invoice
    public function getProducts() {
        return Product::all();
    }
    //GetProductsAll que sera llamado hacia el resource respectivo del Modelo Products
    public function getProductsAll(){
        return view('productslist', [
            'products' => Product::all()
        ]);
    }
    //showNewProducts sera llamado a ProductList para poder ver los productos
    public function showNewProduct() {
        return view('newproduct');
    }
    //este ultimo metodo postProduct sera llamado a newProduct para poder crear
    //un nuevo producto 
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
