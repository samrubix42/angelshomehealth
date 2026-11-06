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

        $this->call([
            TestimonialSeeder::class,
            ServiceSeeder::class,
            CategorySeeder::class,
            BlogSeeder::class,
            HomeSliderSeeder::class,
            SettingSeeder::class,
            ContactSeeder::class,
        ]);
    }
}
