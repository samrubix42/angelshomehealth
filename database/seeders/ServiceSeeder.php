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
                'title' => 'Skilled Nursing Care',
                'slug' => 'skilled-nursing-care',
                'short_description' => '24/7 registered nurse care including wound dressing, IV therapy, medication management, and post-operative monitoring.',
                'description' => 'Our Skilled Nursing team brings hospital-grade clinical expertise directly to the comfort of your home. Licensed Registered Nurses (RNs) and Licensed Practical Nurses (LPNs) manage complex medical regimens, physician-ordered treatments, cardiac telemetry monitoring, and surgical recovery.',
                'meta_title' => 'Skilled Nursing Care in Florida | Angels Home Health',
                'meta_description' => 'Comprehensive in-home skilled nursing services by certified RNs in Central Florida.',
                'meta_keywords' => 'skilled nursing, RN home care, wound care florida, IV therapy',
                'is_active' => true,
            ],
            [
                'title' => 'Physical & Occupational Therapy',
                'slug' => 'physical-occupational-therapy',
                'short_description' => 'Tailored mobility rehab, fall prevention training, stroke recovery, and occupational dexterity enhancement.',
                'description' => 'Our physical and occupational therapists help patients regain independence, balance, and motor coordination after illness, surgery, or neurological events. We conduct home safety audits and build personalized exercise regimens.',
                'meta_title' => 'Physical & Occupational Therapy | Angels Home Health',
                'meta_description' => 'In-home physical therapy and fall prevention rehab in Lake and Orange Counties.',
                'meta_keywords' => 'physical therapy, occupational therapy, stroke rehab, fall prevention',
                'is_active' => true,
            ],
            [
                'title' => 'Personal Care & Companionship',
                'slug' => 'personal-care-companionship',
                'short_description' => 'Assistance with daily living activities including bathing, grooming, meal preparation, and compassionate companionship.',
                'description' => 'Certified Nursing Assistants (CNAs) and Home Health Aides (HHAs) provide dignity-centered personal care. We assist with morning and bedtime routines, light housekeeping, meal preparation, and medication reminders.',
                'meta_title' => 'Personal Home Care & Companionship | Angels Home Health',
                'meta_description' => 'Compassionate home health aide assistance with bathing, dressing, and daily activities.',
                'meta_keywords' => 'personal care aide, companion care, CNA home care, elderly assistance',
                'is_active' => true,
            ],
            [
                'title' => 'Speech & Language Therapy',
                'slug' => 'speech-language-therapy',
                'short_description' => 'Specialized cognitive re-training, swallowing therapy (dysphagia), and speech restoration by certified SLPs.',
                'description' => 'Our licensed Speech-Language Pathologists (SLPs) help patients overcome communication barriers, memory challenges, and swallowing disorders resulting from stroke, Parkinson\'s disease, or traumatic brain injuries.',
                'meta_title' => 'Speech & Language Therapy | Angels Home Health',
                'meta_description' => 'In-home speech pathology and cognitive swallowing therapy in Florida.',
                'meta_keywords' => 'speech therapy, SLP home health, dysphagia treatment, memory care',
                'is_active' => true,
            ],
            [
                'title' => 'Medical Social Services',
                'slug' => 'medical-social-services',
                'short_description' => 'Counseling, community resource planning, financial guidance, and emotional support for patients and families.',
                'description' => 'Licensed Clinical Social Workers (LCSWs) connect families with essential community resources, Medicare/Medicaid assistance, long-term care planning, and supportive crisis counseling during illness.',
                'meta_title' => 'Medical Social Services | Angels Home Health',
                'meta_description' => 'Comprehensive clinical social work support and long-term care coordination.',
                'meta_keywords' => 'medical social worker, LCSW home health, eldercare guidance',
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::firstOrCreate(['slug' => $service['slug']], $service);
        }
    }
}
