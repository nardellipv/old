<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use App\Sale;

class ProductController extends Controller
{

    public function listProduct()
    {
        $products = Product::all();

        return view('admin.product.list', compact('products'));
    }

    public function showProduct($id)
    {
        $product = Product::find($id);

        return view('admin.product.edit', compact('product'));
    }

    public function updateProduct(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->offer = $request['offer'];
        $product->point = $request['point'];
        $product->point_changed = $request['point_changed'];
        $product->save();

        $products = Product::all();

        toastr()->success('Producto Editado Correctamente', 'Producto Editado', ["positionClass" => "toast-bottom-left", "timeOut"=> "3000", "progressBar" => "true"]);
        return view('admin.product.list', compact('products'));
    }

    public function storeProduct(ProductRequest $request)
    {
        Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'offer' => $request['offer'],
            'point' => $request['point'],
            'point_changed' => $request['point_changed'],
        ]);

        toastr()->success('Producto Creado Correctamente', 'Producto Creado', ["positionClass" => "toast-bottom-left", "timeOut"=> "3000", "progressBar" => "true"]);
        return back();
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();

        toastr()->success('Producto Eliminado Correctamente', 'Producto Eliminado', ["positionClass" => "toast-bottom-left", "timeOut"=> "3000", "progressBar" => "true"]);
        return back();
    }

    public function sellProduct($id)
    {
        Sale::create([
            'product_id' => $id,
        ]);

        toastr()->success('Producto Vendido Correctamente', 'Producto Vendido', ["positionClass" => "toast-bottom-left", "timeOut"=> "3000", "progressBar" => "true"]);
        return back();
    }
}
