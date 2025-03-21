<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'John Doe',
                'position' => 'CEO, Example Inc',
                'content' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
                'image' => 'storage/testimonials/testimonial-1.jpg',
                'rating' => 5,
                'order' => 1,
                'active' => true
            ],
            [
                'name' => 'Jane Smith',
                'position' => 'Product Manager, TechCorp',
                'content' => 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
                'image' => 'storage/testimonials/testimonial-2.jpg',
                'rating' => 4,
                'order' => 2,
                'active' => true
            ],
            [
                'name' => 'Michael Johnson',
                'position' => 'Entrepreneur',
                'content' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.',
                'image' => 'storage/testimonials/testimonial-3.jpg',
                'rating' => 5,
                'order' => 3,
                'active' => true
            ],
            [
                'name' => 'Sarah Wilson',
                'position' => 'Designer, Creative Studios',
                'content' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore.',
                'image' => 'storage/testimonials/testimonial-4.jpg',
                'rating' => 4,
                'order' => 4,
                'active' => true
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
} 