<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricingPlans = PricingPlan::orderBy('order')->paginate(10);
        return view('admin.pricing-plans.index', compact('pricingPlans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pricing-plans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
            'interval' => 'required|string|max:50',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:50',
            'button_url' => 'nullable|string|max:255',
            'featured' => 'nullable|boolean',
            'order' => 'nullable|integer|min:0',
            'active' => 'nullable|boolean',
            'features' => 'nullable|array',
            'features.*' => 'nullable|string',
        ]);

        $data = $request->except(['features']);
        $data['featured'] = $request->has('featured');
        $data['active'] = $request->has('active');
        
        // Convert features to JSON
        if ($request->has('features')) {
            // Filter out empty values
            $features = array_filter($request->features, function($feature) {
                return !empty($feature);
            });
            $data['features'] = json_encode($features);
        }

        PricingPlan::create($data);

        return redirect()->route('admin.pricing-plans.index')
            ->with('success', 'Pricing plan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PricingPlan $pricingPlan)
    {
        return view('admin.pricing-plans.show', compact('pricingPlan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PricingPlan $pricingPlan)
    {
        return view('admin.pricing-plans.edit', compact('pricingPlan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PricingPlan $pricingPlan)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
            'interval' => 'required|string|max:50',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:50',
            'button_url' => 'nullable|string|max:255',
            'featured' => 'nullable|boolean',
            'order' => 'nullable|integer|min:0',
            'active' => 'nullable|boolean',
            'features' => 'nullable|array',
            'features.*' => 'nullable|string',
        ]);

        $data = $request->except(['features']);
        $data['featured'] = $request->has('featured');
        $data['active'] = $request->has('active');
        
        // Convert features to JSON
        if ($request->has('features')) {
            // Filter out empty values
            $features = array_filter($request->features, function($feature) {
                return !empty($feature);
            });
            $data['features'] = json_encode($features);
        }

        $pricingPlan->update($data);

        return redirect()->route('admin.pricing-plans.index')
            ->with('success', 'Pricing plan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PricingPlan $pricingPlan)
    {
        $pricingPlan->delete();
        
        return redirect()->route('admin.pricing-plans.index')
            ->with('success', 'Pricing plan deleted successfully.');
    }
}
