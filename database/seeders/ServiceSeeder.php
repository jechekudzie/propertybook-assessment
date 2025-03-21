<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Nesciunt Mete',
                'description' => 'Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.',
                'icon' => 'chart-line',
                'icon_color' => '#4285F4',
                'background_color' => '#E8F0FE',
                'link_text' => 'Read More',
                'link_url' => '#',
                'order' => 1,
                'active' => true
            ],
            [
                'title' => 'Eosle Commodi',
                'description' => 'Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.',
                'icon' => 'cube',
                'icon_color' => '#34A853',
                'background_color' => '#E6F4EA',
                'link_text' => 'Read More',
                'link_url' => '#',
                'order' => 2,
                'active' => true
            ],
            [
                'title' => 'Ledo Markt',
                'description' => 'Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.',
                'icon' => 'images',
                'icon_color' => '#FBBC05',
                'background_color' => '#FEF7E0',
                'link_text' => 'Read More',
                'link_url' => '#',
                'order' => 3,
                'active' => true
            ],
            [
                'title' => 'Asperiores Commodit',
                'description' => 'Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.',
                'icon' => 'shield-alt',
                'icon_color' => '#EA4335',
                'background_color' => '#FCE8E6',
                'link_text' => 'Read More',
                'link_url' => '#',
                'order' => 4,
                'active' => true
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
} 