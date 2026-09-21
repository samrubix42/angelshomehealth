<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@angelshomehealth.com'],
            [
                'name' => 'Administrator',
                'password' => bcrypt('admin123'),
            ]
        );

        $testimonials = [
            [
                'name' => 'Sarah Jenkins',
                'designation' => 'Daughter of Patient • Mount Dora, FL',
                'review' => 'The skilled nursing care provided for my mother after her hip replacement was beyond exceptional. Nurse Sarah was attentive, gentle, and always kept our physician updated.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Marcus Vance',
                'designation' => 'Physical Therapy Patient • Eustis, FL',
                'review' => 'After my stroke, I lost confidence in walking independently. Angels Home Health physical therapists created a home balance program that helped me walk without a cane in 8 weeks.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Aris Thorne',
                'designation' => 'Primary Care Physician • Tavares, FL',
                'review' => 'Angels Home Health is my go-to recommendation for post-acute home nursing. Their ACHC clinical standards and detailed progress reports make post-discharge care seamless.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Emily & James Ross',
                'designation' => 'Family Caregivers • Mount Dora, FL',
                'review' => 'Managing dementia care at home was overwhelming until Angels Memory Care team stepped in. Their respite support allowed our family to rest while knowing Dad was safe and engaging in cognitive routines.',
                'rating' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $data) {
            Testimonial::firstOrCreate(['name' => $data['name']], $data);
        }

        $this->call([
            ServiceSeeder::class,
            CategorySeeder::class,
            BlogSeeder::class,
            HomeSliderSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
