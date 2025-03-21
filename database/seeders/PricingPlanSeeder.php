<?php

namespace Database\Seeders;

use App\Models\PricingPlan;
use Illuminate\Database\Seeder;

class PricingPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pricingPlans = [
            [
                'name' => 'Free Plan',
                'price' => 0,
                'currency' => '$',
                'billing_period' => 'month',
                'description' => 'Perfect for individuals and small projects.',
                'features' => [
                    'Single User',
                    '5 Projects',
                    '2GB Storage',
                    'Basic Support',
                    'Email Notifications'
                ],
                'is_featured' => false,
                'button_text' => 'Get Started',
                'button_url' => '#',
                'order' => 1,
                'active' => true
            ],
            [
                'name' => 'Standard Plan',
                'price' => 19.9,
                'currency' => '$',
                'billing_period' => 'month',
                'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.',
                'features' => [
                    'Up to 5 Users',
                    '15 Projects',
                    '10GB Storage',
                    'Priority Support',
                    'Analytics Dashboard',
                    'Customized Reporting',
                    'API Access'
                ],
                'is_featured' => true,
                'button_text' => 'Get Started',
                'button_url' => '#',
                'order' => 2,
                'active' => true
            ],
            [
                'name' => 'Business Plan',
                'price' => 49.9,
                'currency' => '$',
                'billing_period' => 'month',
                'description' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.',
                'features' => [
                    'Unlimited Users',
                    'Unlimited Projects',
                    '100GB Storage',
                    '24/7 Premium Support',
                    'Advanced Analytics',
                    'Custom Integrations',
                    'White Labeling',
                    'Dedicated Account Manager'
                ],
                'is_featured' => false,
                'button_text' => 'Get Started',
                'button_url' => '#',
                'order' => 3,
                'active' => true
            ]
        ];

        foreach ($pricingPlans as $plan) {
            PricingPlan::create($plan);
        }
    }
} 