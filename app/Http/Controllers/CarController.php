<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use \Illuminate\Contracts\View\View;

class CarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('dashboard.cars.index', [
            'cars' => Car::all()
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
        return view('dashboard.cars.show', [
            'car' => Car::findOrFail($id)
        ]);
    }
}
