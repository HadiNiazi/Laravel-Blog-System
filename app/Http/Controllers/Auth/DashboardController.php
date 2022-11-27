<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $postsCount = Post::count();
        $tagsCount = Tag::count();
        $categoriesCount = Category::count();
        $usersCount = User::count();

        return view('auth.dashboard', compact('postsCount', 'tagsCount', 'categoriesCount', 'usersCount'));
    }
}
