<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'How do I get started with your service?',
                'answer' => 'To get started, simply sign up for an account on our website. Once registered, you can choose a plan that best suits your needs. Our onboarding process will guide you through the initial setup, and our support team is always available to help with any questions you might have.',
                'order' => 1,
                'is_open_by_default' => true,
                'active' => true
            ],
            [
                'question' => 'What payment methods do you accept?',
                'answer' => 'We accept all major credit cards (Visa, MasterCard, American Express), PayPal, and bank transfers for annual plans. All payments are processed securely through our payment partners. For enterprise clients, we also offer custom invoicing options.',
                'order' => 2,
                'is_open_by_default' => false,
                'active' => true
            ],
            [
                'question' => 'Can I upgrade or downgrade my plan later?',
                'answer' => 'Yes, you can change your plan at any time. If you upgrade, the new features will be immediately available, and we\'ll prorate the cost for the remainder of your billing cycle. If you downgrade, the changes will take effect at the start of your next billing cycle.',
                'order' => 3,
                'is_open_by_default' => false,
                'active' => true
            ],
            [
                'question' => 'Do you offer a refund if I\'m not satisfied?',
                'answer' => 'We offer a 30-day money-back guarantee for all our plans. If you\'re not completely satisfied with our service within the first 30 days, you can request a full refund. For annual subscriptions, we offer a prorated refund if canceled after the first 30 days.',
                'order' => 4,
                'is_open_by_default' => false,
                'active' => true
            ],
            [
                'question' => 'How can I contact customer support?',
                'answer' => 'Our customer support team is available 24/7. You can reach us through the live chat on our website, by email at support@example.com, or by phone at +1 (800) 123-4567. For technical issues, you can also create a support ticket from your account dashboard.',
                'order' => 5,
                'is_open_by_default' => false,
                'active' => true
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
} 