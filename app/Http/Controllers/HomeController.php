<?php

namespace App\Http\Controllers;

use App\Models\CallToAction;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\Stat;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $features = Feature::where('active', true)
            ->orderBy('order')
            ->get();
            
        $services = Service::where('active', true)
            ->orderBy('order')
            ->get();
            
        $testimonials = Testimonial::where('active', true)
            ->orderBy('order')
            ->get();
            
        $pricing_plans = PricingPlan::where('active', true)
            ->orderBy('order')
            ->get();
            
        $faqs = Faq::where('active', true)
            ->orderBy('order')
            ->get();
            
        $stats = Stat::where('active', true)
            ->orderBy('order')
            ->get();
            
        $contact = Contact::where('active', true)
            ->first();
            
        $call_to_action = CallToAction::where('active', true)
            ->first();
            
        return view('one-page', compact(
            'features',
            'services',
            'testimonials',
            'pricing_plans',
            'faqs',
            'stats',
            'contact',
            'call_to_action'
        ));
    }
}
