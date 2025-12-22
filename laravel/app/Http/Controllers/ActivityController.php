<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Customer;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::with(['customer', 'exercise'])->get();
        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        $customers = Customer::all();
        $exercises = Exercise::all();
        return view('activities.create', compact('customers', 'exercises'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'exercise_id' => 'required|exists:exercises,id',
            'repetition' => 'required|integer',
            'calori' => 'required|integer',
            'duration' => 'required|integer',
        ]);

        $validated['like'] = $request->has('like');
        Activity::create($validated);
        return redirect()->route('activities.index')->with('success', 'Aktivite başarıyla eklendi.');
    }

    public function show(Activity $activity)
    {
        return view('activities.show', compact('activity'));
    }

    public function edit(Activity $activity)
    {
        $customers = Customer::all();
        $exercises = Exercise::all();
        return view('activities.edit', compact('activity', 'customers', 'exercises'));
    }

    public function update(Request $request, Activity $activity)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'exercise_id' => 'required|exists:exercises,id',
            'repetition' => 'required|integer',
            'calori' => 'required|integer',
            'duration' => 'required|integer',
        ]);

        $validated['like'] = $request->has('like');
        $activity->update($validated);
        return redirect()->route('activities.index')->with('success', 'Aktivite başarıyla güncellendi.');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('activities.index')->with('success', 'Aktivite başarıyla silindi.');
    }
}
