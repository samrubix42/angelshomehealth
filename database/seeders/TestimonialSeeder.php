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
                'name' => 'S. J.',
                'designation' => 'Mount Dora, FL',
                'review' => 'The skilled nursing care provided for my mother after her hip replacement was beyond exceptional. The clinical team was attentive, gentle, and always kept our physician updated throughout recovery.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'M. V.',
                'designation' => 'Eustis, FL',
                'review' => 'After my stroke, I lost confidence in walking independently. Angels Home Health physical therapists created a personalized balance program that helped me walk without a cane in 8 weeks.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'A. T.',
                'designation' => 'Tavares, FL',
                'review' => 'Angels Home Health is our primary recommendation for post-acute home nursing. Their ACHC clinical standards and detailed progress reports make post-discharge transitions seamless.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'J. R.',
                'designation' => 'Mount Dora, FL',
                'review' => 'Managing memory care at home was overwhelming until the Angels care team stepped in. Their clinical routine allowed our family to rest while knowing Dad was safe and engaged.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'D. M.',
                'designation' => 'Leesburg, FL',
                'review' => 'From complex wound dressing to physical therapy, every nurse treats us with genuine dignity. Having hospital-quality clinical care right in our living room gave our family our lives back.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'R. K.',
                'designation' => 'Clermont, FL',
                'review' => 'Their cardiac rehab and diabetic education nurses are world-class. They patiently taught my father how to manage his medications and track his vitals daily with complete confidence.',
                'rating' => 5,
                'is_active' => true,
            ],
        ];

        Testimonial::truncate();

        foreach ($testimonials as $data) {
            Testimonial::create($data);
        }
    }
}

