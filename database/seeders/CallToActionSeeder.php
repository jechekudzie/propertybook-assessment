<?php

namespace Database\Seeders;

use App\Models\CallToAction;
use Illuminate\Database\Seeder;

class CallToActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CallToAction::create([
            'title' => 'Maecenas tempus tellus eget condimentum',
            'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel',
            'button_text' => 'Call To Action',
            'button_url' => '#',
            'background_color' => '#4285F4',
            'active' => true
        ]);
    }
} 