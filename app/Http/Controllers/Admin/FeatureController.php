<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::orderBy('order')->paginate(10);
        return view('admin.features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.features.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tab_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'list_items' => 'nullable|array',
            'list_items.*' => 'nullable|string',
            'order' => 'nullable|integer|min:0',
            'active' => 'nullable|boolean',
        ]);

        $data = $request->except('image', 'list_items');
        $data['active'] = $request->has('active');
        $data['list_items'] = array_filter($request->list_items ?? []);

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'feature_' . time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('storage/features');
            
            // Ensure directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0775, true);
            }
            
            $file->move($destinationPath, $filename);
            $data['image'] = 'storage/features/' . $filename;
        }

        Feature::create($data);

        return redirect()->route('admin.features.index')
            ->with('success', 'Feature created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        return view('admin.features.show', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        return view('admin.features.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'tab_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'list_items' => 'nullable|array',
            'list_items.*' => 'nullable|string',
            'order' => 'nullable|integer|min:0',
            'active' => 'nullable|boolean',
        ]);

        $data = $request->except('image', 'list_items');
        $data['active'] = $request->has('active');
        $data['list_items'] = array_filter($request->list_items ?? []);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($feature->image) {
                $oldImagePath = public_path($feature->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            
            $file = $request->file('image');
            $filename = 'feature_' . time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('storage/features');
            
            // Ensure directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0775, true);
            }
            
            $file->move($destinationPath, $filename);
            $data['image'] = 'storage/features/' . $filename;
        }

        $feature->update($data);

        return redirect()->route('admin.features.index')
            ->with('success', 'Feature updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        // Delete the image file if it exists
        if ($feature->image) {
            $imagePath = public_path($feature->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        
        $feature->delete();
        
        return redirect()->route('admin.features.index')
            ->with('success', 'Feature deleted successfully.');
    }
}
