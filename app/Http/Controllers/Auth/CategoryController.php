<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function openCategoriesPage()
    {
        $categories = Category::all();
        
        return view('auth.categories.index', compact('categories')); 
    }
}
