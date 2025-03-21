<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stat;
use Illuminate\Http\Request;

class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stats = Stat::orderBy('order')->paginate(10);
        return view('admin.stats.index', compact('stats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.stats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string|max:50',
            'icon' => 'nullable|string|max:100',
            'prefix' => 'nullable|string|max:20',
            'suffix' => 'nullable|string|max:20',
            'order' => 'nullable|integer|min:0',
            'active' => 'nullable|boolean',
        ]);

        $data = $request->all();
        $data['active'] = $request->has('active');

        Stat::create($data);

        return redirect()->route('admin.stats.index')
            ->with('success', 'Stat created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stat $stat)
    {
        return view('admin.stats.show', compact('stat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stat $stat)
    {
        return view('admin.stats.edit', compact('stat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stat $stat)
    {
        $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string|max:50',
            'icon' => 'nullable|string|max:100',
            'prefix' => 'nullable|string|max:20',
            'suffix' => 'nullable|string|max:20',
            'order' => 'nullable|integer|min:0',
            'active' => 'nullable|boolean',
        ]);

        $data = $request->all();
        $data['active'] = $request->has('active');

        $stat->update($data);

        return redirect()->route('admin.stats.index')
            ->with('success', 'Stat updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stat $stat)
    {
        $stat->delete();
        
        return redirect()->route('admin.stats.index')
            ->with('success', 'Stat deleted successfully.');
    }
}
