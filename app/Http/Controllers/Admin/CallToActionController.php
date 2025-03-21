<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CallToAction;
use Illuminate\Http\Request;

class CallToActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $callToActions = CallToAction::latest()->paginate(10);
        return view('admin.call-to-actions.index', compact('callToActions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.call-to-actions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'button_text' => 'required|string|max:50',
            'button_url' => 'required|url|max:255',
            'background_color' => 'required|string|max:20',
            'active' => 'boolean',
        ]);

        // Set active to false if not provided
        $validated['active'] = $request->has('active');
        
        CallToAction::create($validated);
        
        return redirect()->route('admin.call-to-actions.index')
            ->with('success', 'Call to action created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CallToAction $callToAction)
    {
        return view('admin.call-to-actions.show', compact('callToAction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CallToAction $callToAction)
    {
        return view('admin.call-to-actions.edit', compact('callToAction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CallToAction $callToAction)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'button_text' => 'required|string|max:50',
            'button_url' => 'required|url|max:255',
            'background_color' => 'required|string|max:20',
            'active' => 'boolean',
        ]);

        // Set active to false if not provided
        $validated['active'] = $request->has('active');
        
        $callToAction->update($validated);
        
        return redirect()->route('admin.call-to-actions.index')
            ->with('success', 'Call to action updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CallToAction $callToAction)
    {
        $callToAction->delete();
        return redirect()->route('admin.call-to-actions.index')
            ->with('success', 'Call to action deleted successfully');
    }
}
