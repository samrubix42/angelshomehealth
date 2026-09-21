<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'Senior Wellness & Aging',
                'slug' => 'senior-wellness-aging',
                'is_activate' => true,
            ],
            [
                'title' => 'Post-Op & Rehabilitation',
                'slug' => 'post-op-rehabilitation',
                'is_activate' => true,
            ],
            [
                'title' => 'Clinical Nursing Care',
                'slug' => 'clinical-nursing-care',
                'is_activate' => true,
            ],
            [
                'title' => 'Family Caregiver Tips',
                'slug' => 'family-caregiver-tips',
                'is_activate' => true,
            ],
            [
                'title' => 'Chronic Disease Management',
                'slug' => 'chronic-disease-management',
                'is_activate' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(['slug' => $category['slug']], $category);
        }
    }
}
