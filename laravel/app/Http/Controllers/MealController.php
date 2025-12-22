<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Customer;
use App\Models\Food;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        $meals = Meal::with(['customer', 'food'])->get();
        return view('meals.index', compact('meals'));
    }

    public function create()
    {
        $customers = Customer::all();
        $foods = Food::all();
        return view('meals.create', compact('customers', 'foods'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'food_id' => 'required|exists:food,id',
            'mealtime' => 'required|string',
        ]);

        $validated['like'] = $request->has('like');
        Meal::create($validated);
        return redirect()->route('meals.index')->with('success', 'Öğün başarıyla eklendi.');
    }

    public function show(Meal $meal)
    {
        return view('meals.show', compact('meal'));
    }

    public function edit(Meal $meal)
    {
        $customers = Customer::all();
        $foods = Food::all();
        return view('meals.edit', compact('meal', 'customers', 'foods'));
    }

    public function update(Request $request, Meal $meal)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'food_id' => 'required|exists:food,id',
            'mealtime' => 'required|string',
        ]);

        $validated['like'] = $request->has('like');
        $meal->update($validated);
        return redirect()->route('meals.index')->with('success', 'Öğün başarıyla güncellendi.');
    }

    public function destroy(Meal $meal)
    {
        $meal->delete();
        return redirect()->route('meals.index')->with('success', 'Öğün başarıyla silindi.');
    }
}
