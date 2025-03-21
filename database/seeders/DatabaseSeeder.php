<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call section seeders
        $this->call([
            FeatureSeeder::class,
            ServiceSeeder::class,
            StatSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            PricingPlanSeeder::class,
            ContactSeeder::class,
            CallToActionSeeder::class,
        ]);
    }
}
