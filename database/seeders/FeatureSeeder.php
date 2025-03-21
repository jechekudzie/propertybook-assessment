<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'tab_name' => 'Modisit',
                'title' => 'Voluptatem dignissimos provident',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus laoreet odio, vitae sagittis quam scelerisque sit amet.',
                'image' => 'storage/features/feature_1.jpg',
                'list_items' => [
                    'Ullamco laboris nisi ut aliquip ex ea commodo consequat',
                    'Duis aute irure dolor in reprehenderit in voluptate',
                    'Ullamco laboris nisi ut aliquip ex ea commodo'
                ],
                'order' => 1,
                'active' => true
            ],
            [
                'tab_name' => 'Praesenti',
                'title' => 'Neque porro quisquam est',
                'description' => 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt.',
                'image' => 'storage/features/feature_2.jpg',
                'list_items' => [
                    'Duis aute irure dolor in reprehenderit in voluptate',
                    'Ullamco laboris nisi ut aliquip ex ea commodo',
                    'Consectetur adipiscing elit, sed do eiusmod tempor'
                ],
                'order' => 2,
                'active' => true
            ],
            [
                'tab_name' => 'Explica',
                'title' => 'Sed ut perspiciatis unde',
                'description' => 'Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere.',
                'image' => 'storage/features/feature_3.jpg',
                'list_items' => [
                    'Nulla porttitor accumsan tincidunt',
                    'Praesent sapien massa, convallis a pellentesque',
                    'Curabitur aliquet quam id dui posuere'
                ],
                'order' => 3,
                'active' => true
            ]
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
} 