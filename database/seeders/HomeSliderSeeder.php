<?php

namespace Database\Seeders;

use App\Models\HomeSlider;
use Illuminate\Database\Seeder;

class HomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeSlider::truncate();

        $sliders = [
            [
                'title' => 'Expert Medical Care in the Comfort of Home',
                'paragraph' => 'Angels Home Health of Florida brings trusted skilled nursing, physical therapy, and chronic disease management directly to your doorstep in Mount Dora, Orlando, and surrounding communities.',
                'image' => 'https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?q=80&w=1920&auto=format&fit=crop',
                'btn_1' => 'Schedule a Free Assessment',
                'btn_1_url' => '#consultation',
                'btn_2' => 'Explore Our Services',
                'btn_2_url' => '#services',
                'is_active' => true,
            ],
            [
                'title' => 'Care Plans as Unique as Your Family',
                'paragraph' => "We don't believe in one-size-fits-all. From post-surgery rehabilitation to 24-hour Alzheimer's support, our tailored plans focus on dignity, independence, and faster recovery.",
                'image' => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?q=80&w=1920&auto=format&fit=crop',
                'btn_1' => 'Speak to a Nurse Today',
                'btn_1_url' => '#consultation',
                'btn_2' => null,
                'btn_2_url' => null,
                'is_active' => true,
            ],
            [
                'title' => 'Trusted Support for Complex Health Needs',
                'paragraph' => 'Navigating chronic conditions or a recent hospital discharge can be overwhelming. Let our licensed therapists and Medicare-certified clinicians guide your healing journey.',
                'image' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=1920&auto=format&fit=crop',
                'btn_1' => 'View Medical Services',
                'btn_1_url' => '#services',
                'btn_2' => null,
                'btn_2_url' => null,
                'is_active' => true,
            ],
        ];

        foreach ($sliders as $slider) {
            HomeSlider::create($slider);
        }
    }
}
