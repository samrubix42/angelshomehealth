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
        $sliders = [
            [
                'title' => 'Dedicated In-Home Care in Mount Dora, FL & Around',
                'paragraph' => 'Angels Home Health of Florida delivers a full spectrum of skilled nursing, physical therapy, behavioral health, and chronic disease management right in the comfort of your home.',
                'image' => 'https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?q=80&w=1920&auto=format&fit=crop',
                'btn_1' => 'Schedule Free Consultation',
                'btn_1_url' => '#consultation',
                'btn_2' => 'Explore Our Services',
                'btn_2_url' => '#services',
                'is_active' => true,
            ],
            [
                'title' => 'Personalized Care Plans Tailored to You',
                'paragraph' => 'We design customized care plans that meet the unique needs of each individual, ensuring comfort, dignity, and independence. From daily personal care to 24-hour support.',
                'image' => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?q=80&w=1920&auto=format&fit=crop',
                'btn_1' => 'Why Choose Us',
                'btn_1_url' => '#why-us',
                'btn_2' => 'Call +1 352 729 2727',
                'btn_2_url' => 'tel:13527292727',
                'is_active' => true,
            ],
            [
                'title' => 'Trusted Support for Complex Health Needs',
                'paragraph' => 'Specialized care for Alzheimer’s, Parkinson’s, post-surgery recovery, and chronic health conditions led by board-certified registered nurses and therapists.',
                'image' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=1920&auto=format&fit=crop',
                'btn_1' => 'Medical Services',
                'btn_1_url' => '#services',
                'btn_2' => 'Speak With a Nurse',
                'btn_2_url' => '#consultation',
                'is_active' => true,
            ],
        ];

        foreach ($sliders as $slider) {
            HomeSlider::updateOrCreate(
                ['title' => $slider['title']],
                $slider
            );
        }
    }
}
