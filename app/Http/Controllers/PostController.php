<?php

namespace App\Http\Controllers;

use App\Models\Post;
use \Illuminate\Contracts\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('dashboard.posts.index', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * * @return View
     */
    public function show(int $id): View
    {
        return view('dashboard.posts.show', [
            'post' => Post::findOrFail($id)
        ]);
    }
}
