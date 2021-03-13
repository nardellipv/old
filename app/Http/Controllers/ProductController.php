<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;

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
        $product->available = $request['available'];
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
            'available' => $request['available'],
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
}
