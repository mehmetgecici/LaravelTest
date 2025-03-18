<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return response()->json(Car::all());
    }

    public function show(Car $car)
    {
        return response()->json($car);
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
        ]);

        $car = Car::create($request->all());

        return response()->json($car, 201);
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'brand' => 'sometimes|string',
            'model' => 'sometimes|string',
            'year' => 'sometimes|integer',
        ]);

        $car->update($request->all());

        return response()->json($car);
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return response()->json(['message' => 'Car deleted']);
    }
}
