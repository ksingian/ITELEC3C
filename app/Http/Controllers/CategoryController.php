<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Create Category
    public function createCategory()
    {
        return view('form.create');
    }

    public function submitCategory(Request $request)
    {
        $category = new Category;
        $category->name = $request->cat_name;
        $category->description = $request->cat_desc;
        $category->save();
        return redirect('/categories')->with('status', 'New Category has been added');
    }

    public function index() {
        $categories = Category::all();
        return view("admin.category.category", compact("categories"));
    }
}
