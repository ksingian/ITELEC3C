<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Method to create a new category
    public function create()
    {
        // Add validation as needed
        $data = request()->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($data);

        return redirect()->route('categories.index');
    }

    public function index() {
        $categories = Category::all();
        return view("admin.category.category", compact("categories"));
    }
}
