<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(StoreCarRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = Storage::putFile('uploads/cars/images', $request->file('image'));
        }

        Car::create($validated);

        return redirect()->route('admin.cars.index')->with('success', 'Car created successfully.');
    }

    public function show(string$id)
    {
        $car = Car::findOrFail($id);

        return view('admin.cars.show', compact('car'));
    }

    public function edit(string $id)
    {
        $car = Car::findOrFail($id);

        return view('admin.cars.edit', compact('car'));
    }

    public function update(UpdateCarRequest $request, string $id)
    {
        $car = Car::findOrFail($id);
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($car->image) Storage::delete($car->image);
            $validated['image'] = Storage::putFile('uploads/cars/images', $request->file('image'));
        }
        $car->update($validated);
        return redirect()->route('admin.cars.index')->with('success', 'Car updated successfully.');
    }

    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);

        if($car->image){
            Storage::delete($car->image);
        }

        $car->delete();

        return redirect()->back()->with('success', 'Car deleted successfully.');
    }
}
