<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'address' => '123 Innovation Street, Tech City, TC 10012',
            'phone1' => '+1 5589 55488 55',
            'phone2' => '+1 6678 254445 41',
            'email1' => 'info@example.com',
            'email2' => 'contact@example.com',
            'social_twitter' => 'https://twitter.com/example',
            'social_facebook' => 'https://facebook.com/example',
            'social_instagram' => 'https://instagram.com/example',
            'social_linkedin' => 'https://linkedin.com/company/example',
            'active' => true
        ]);
    }
} 