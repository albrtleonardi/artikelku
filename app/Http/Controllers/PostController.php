<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
{
    $query = Post::query();

    if ($request->has('search') && $request->search != '') {
        $query->where('title', 'like', '%' . $request->search . '%');
    }

    if ($request->has('category') && $request->category != '') {
        $query->where('category_id', $request->category);
    }

    $posts = $query->with('category')->paginate(5)->appends($request->only(['search', 'category']));
    $categories = Category::all();

    return view('posts.index', compact('posts', 'categories'));
}

public function show($id)
{
    $post = Post::with('category')->findOrFail($id);
    return view('posts.show', compact('post'));
}

}
