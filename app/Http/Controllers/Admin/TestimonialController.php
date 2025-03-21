<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('order')->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'testimonial' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer|min:0',
            'active' => 'nullable|boolean',
        ]);

        $data = $request->except('image', 'testimonial');
        $data['active'] = $request->has('active');
        $data['content'] = $request->testimonial;

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'testimonial_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/testimonials', $filename);
            $data['image'] = 'storage/testimonials/' . $filename;
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'testimonial' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer|min:0',
            'active' => 'nullable|boolean',
        ]);

        $data = $request->except('image', 'testimonial');
        $data['active'] = $request->has('active');
        $data['content'] = $request->testimonial;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($testimonial->image && Storage::exists(str_replace('storage/', 'public/', $testimonial->image))) {
                Storage::delete(str_replace('storage/', 'public/', $testimonial->image));
            }
            
            $file = $request->file('image');
            $filename = 'testimonial_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/testimonials', $filename);
            $data['image'] = 'storage/testimonials/' . $filename;
        }

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        // Delete the image file if it exists
        if ($testimonial->image && Storage::exists(str_replace('storage/', 'public/', $testimonial->image))) {
            Storage::delete(str_replace('storage/', 'public/', $testimonial->image));
        }
        
        $testimonial->delete();
        
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial deleted successfully.');
    }
}
