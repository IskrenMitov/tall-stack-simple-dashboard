<?php

namespace App\Http\Controllers;

use App\Models\Author;
use \Illuminate\Contracts\View\View;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('dashboard.authors.index', [
            'authors' => Author::all()
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
        return view('dashboard.authors.show', [
            'author' => Author::findOrFail($id)
        ]);
    }
}
