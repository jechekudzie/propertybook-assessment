<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required|string|max:500',
            'phone1' => 'required|string|max:20',
            'phone2' => 'nullable|string|max:20',
            'email1' => 'required|email|max:100',
            'email2' => 'nullable|email|max:100',
            'social_twitter' => 'nullable|url|max:255',
            'social_facebook' => 'nullable|url|max:255',
            'social_instagram' => 'nullable|url|max:255',
            'social_linkedin' => 'nullable|url|max:255',
            'active' => 'boolean',
        ]);

        // Set active to false if not provided
        $validated['active'] = $request->has('active');
        
        Contact::create($validated);
        
        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact information created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'address' => 'required|string|max:500',
            'phone1' => 'required|string|max:20',
            'phone2' => 'nullable|string|max:20',
            'email1' => 'required|email|max:100',
            'email2' => 'nullable|email|max:100',
            'social_twitter' => 'nullable|url|max:255',
            'social_facebook' => 'nullable|url|max:255',
            'social_instagram' => 'nullable|url|max:255',
            'social_linkedin' => 'nullable|url|max:255',
            'active' => 'boolean',
        ]);

        // Set active to false if not provided
        $validated['active'] = $request->has('active');
        
        $contact->update($validated);
        
        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact deleted successfully');
    }
}
