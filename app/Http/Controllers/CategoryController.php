<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
    public function list()
    {
        $categories = Category::all();

        return view('admin.category.list', compact('categories'));
    }

    public function addCategory(CategoryRequest $request)
    {
        Category::create([
            'name' => $request['name'],
            'point' => $request['point'],
        ]);

        toastr()->success('Categoría Agregada Correctamente', 'Categoría Agregada', ["positionClass" => "toast-bottom-left", "timeOut"=> "3000", "progressBar" => "true"]);
        return back();
    }

    public function updateCategory(CategoryUpdateRequest $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request['name'];
        $category->point = $request['point'];
        $category->save();

        toastr()->success('Categoría Modificada Correctamente', 'Categoría Modificada', ["positionClass" => "toast-bottom-left", "timeOut"=> "3000", "progressBar" => "true"]);
        return back();
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();

        toastr()->success('Categoría Eliminada Correctamente', 'Categoría Eliminada', ["positionClass" => "toast-bottom-left", "timeOut"=> "3000", "progressBar" => "true"]);
        return back();
    }
}
