<?php

namespace App\Http\Controllers;

use App\Models\Location;
use \Illuminate\Contracts\View\View;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('dashboard.locations.index', [
            'locations' => Location::all()
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
        return view('dashboard.locations.show', [
            'location' => Location::findOrFail($id)
        ]);
    }
}
