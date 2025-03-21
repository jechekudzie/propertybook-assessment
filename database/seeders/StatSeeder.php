<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stats = [
            [
                'label' => 'Happy Clients',
                'value' => 232,
                'icon' => 'smile',
                'prefix' => '',
                'suffix' => '+',
                'order' => 1,
                'active' => true
            ],
            [
                'label' => 'Projects',
                'value' => 521,
                'icon' => 'project-diagram',
                'prefix' => '',
                'suffix' => '',
                'order' => 2,
                'active' => true
            ],
            [
                'label' => 'Hours Of Support',
                'value' => 1463,
                'icon' => 'headset',
                'prefix' => '',
                'suffix' => '',
                'order' => 3,
                'active' => true
            ],
            [
                'label' => 'Team Members',
                'value' => 15,
                'icon' => 'users',
                'prefix' => '',
                'suffix' => '',
                'order' => 4,
                'active' => true
            ]
        ];

        foreach ($stats as $stat) {
            Stat::create($stat);
        }
    }
} 