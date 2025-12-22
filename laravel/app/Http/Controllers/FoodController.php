<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('foods.index', compact('foods'));
    }

    public function create()
    {
        return view('foods.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'calori' => 'required|integer',
        ]);

        Food::create($validated);
        return redirect()->route('foods.index')->with('success', 'Yiyecek başarıyla eklendi.');
    }

    public function show(Food $food)
    {
        return view('foods.show', compact('food'));
    }

    public function edit(Food $food)
    {
        return view('foods.edit', compact('food'));
    }

    public function update(Request $request, Food $food)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'calori' => 'required|integer',
        ]);

        $food->update($validated);
        return redirect()->route('foods.index')->with('success', 'Yiyecek başarıyla güncellendi.');
    }

    public function destroy(Food $food)
    {
        $food->delete();
        return redirect()->route('foods.index')->with('success', 'Yiyecek başarıyla silindi.');
    }
}
