<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CallToAction;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\Stat;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            $counts = [
                'features' => Feature::count(),
                'services' => Service::count(),
                'testimonials' => Testimonial::count(),
                'pricing_plans' => PricingPlan::count(),
                'faqs' => Faq::count(),
                'stats' => Stat::count(),
                'contacts' => Contact::count(),
                'call_to_actions' => CallToAction::count(),
            ];
            
            return view('admin.dashboard', compact('counts'));
        } catch (\Exception $e) {
            // For debugging
            return 'Error: ' . $e->getMessage();
        }
    }
}
