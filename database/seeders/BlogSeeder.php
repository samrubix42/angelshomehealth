<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all()->keyBy('slug');

        if ($categories->isEmpty()) {
            return;
        }

        $blogs = [
            [
                'category_slug' => 'post-op-rehabilitation',
                'title' => '5 Essential Tips for Post-Surgery Care at Home',
                'slug' => '5-essential-tips-for-post-surgery-care-at-home',
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80&w=800',
                'short_description' => 'Recovering from surgery at home requires proper wound care, medication management, and mobility support. Learn how skilled home nursing accelerates healing.',
                'description' => '<p>Transitioning from the hospital to recovering at home is a critical phase in any patient\'s healing journey. Proper care during the first few weeks significantly reduces hospital readmission risks and accelerates full physical recovery.</p><h4>1. Follow Physician Discharge Instructions Rigorously</h4><p>Ensure that all surgical wound care protocols, medication schedules, and activity restrictions ordered by your surgeon are strictly followed. Having a registered home health nurse monitor vital signs and incision healing offers immense peace of mind.</p><h4>2. Maintain a Clean & Safe Environment</h4><p>Prevent infections by keeping dressing materials sterile and maintaining a clean recovery area. Remove tripping hazards such as loose rugs or electrical cords to prevent accidental falls.</p><h4>3. Manage Pain Proactively</h4><p>Do not wait for pain to become severe before taking prescribed medications. Taking pain management doses on schedule enables better participation in physical therapy exercises.</p><h4>4. Prioritize Hydration & Targeted Nutrition</h4><p>Protein-rich foods, vitamin C, and adequate hydration promote tissue repair and cellular regeneration. Consult with your home health care team for tailored dietary recommendations.</p><h4>5. Engage in Guided Physical Therapy</h4><p>Gentle, physician-approved mobility exercises keep circulation active, prevent blood clots, and rebuild muscular strength safely.</p>',
                'meta_title' => '5 Essential Tips for Post-Surgery Care at Home | Angels Home Health',
                'meta_description' => 'Comprehensive guide to recovering at home post-surgery with skilled nursing support in Florida.',
                'meta_keywords' => 'post surgery home care, wound healing, home nursing care, recovery tips',
                'is_active' => true,
            ],
            [
                'category_slug' => 'senior-wellness-aging',
                'title' => 'Understanding Fall Prevention: A Guide for Seniors and Families',
                'slug' => 'understanding-fall-prevention-a-guide-for-seniors-and-families',
                'image' => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&q=80&w=800',
                'short_description' => 'Falls are the leading cause of injury among seniors, but most falls are preventable. Discover home safety modifications and balance exercises.',
                'description' => '<p>For older adults, maintaining independence begins with a safe living environment. According to health authorities, one out of four seniors falls each year, but proactive measures can drastically reduce fall risks.</p><h4>Identifying Common Home Hazards</h4><p>Poor lighting in hallways, slippery bathroom tile, cluttered staircases, and unsecured rugs are primary contributors to accidental falls. Installing grab bars near toilets and showers provides immediate stability.</p><h4>The Role of Occupational & Physical Therapy</h4><p>In-home physical therapy focuses on strengthening core muscles, improving gait stability, and retraining balance. Home safety audits conducted by licensed therapists identify hidden hazards before accidents occur.</p><h4>Regular Vision & Medication Reviews</h4><p>Side effects from multiple prescriptions can cause dizziness or sudden blood pressure drops. Regular physician reviews combined with annual vision checks ensure seniors remain steady on their feet.</p>',
                'meta_title' => 'Understanding Fall Prevention Guide | Angels Home Health',
                'meta_description' => 'Learn key home modifications and balance exercises to prevent senior falls.',
                'meta_keywords' => 'fall prevention, senior home safety, physical therapy, balance training',
                'is_active' => true,
            ],
            [
                'category_slug' => 'clinical-nursing-care',
                'title' => 'How In-Home Wound Care Speeds Up Recovery and Prevents Infection',
                'slug' => 'how-in-home-wound-care-speeds-up-recovery',
                'image' => 'https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?auto=format&fit=crop&q=80&w=800',
                'short_description' => 'Chronic wounds and surgical incisions require specialized clinical attention. Learn how certified RN wound care specialists promote rapid healing.',
                'description' => '<p>Managing complex wounds, diabetic ulcers, or surgical incisions at home requires advanced clinical technique. Improper dressing changes or unmonitored signs of infection can lead to severe complications.</p><h4>Advanced Dressing Technologies</h4><p>Modern wound care utilizes specialized hydrocolloid, foam, and silver-impregnated dressings that maintain an optimal moisture balance to accelerate cellular regeneration.</p><h4>Early Infection Detection</h4><p>Home health nurses continuously assess wounds for localized heat, unusual discharge, redness, or odor. Catching early warning signs allows rapid intervention with prescribing physicians.</p><h4>Patient and Caregiver Education</h4><p>Empowering family caregivers with proper hygiene practices and gentle handling techniques ensures continuous, compassionate care between nursing visits.</p>',
                'meta_title' => 'In-Home Wound Care & Infection Prevention | Angels Home Health',
                'meta_description' => 'Expert clinical wound care services delivered by licensed RNs in Central Florida.',
                'meta_keywords' => 'in-home wound care, RN dressing change, diabetic ulcer care, infection control',
                'is_active' => true,
            ],
            [
                'category_slug' => 'family-caregiver-tips',
                'title' => 'Preventing Caregiver Burnout: Strategies for Family Members',
                'slug' => 'preventing-caregiver-burnout-strategies-for-family-members',
                'image' => 'https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?auto=format&fit=crop&q=80&w=800',
                'short_description' => 'Caring for a aging or ill loved one is deeply rewarding, but can take an emotional toll. Explore respite care options and self-care strategies.',
                'description' => '<p>Family caregivers often put their own physical and mental well-being on hold while caring for an ill or elderly relative. Over time, chronic stress can result in physical exhaustion, anxiety, and caregiver burnout.</p><h4>Recognizing the Signs of Burnout</h4><p>Common indicators include persistent fatigue, withdrawal from social activities, changes in sleep patterns, and feeling overwhelmed by routine caregiving duties.</p><h4>Utilizing Respite & Professional Home Care</h4><p>Enlisting professional home health aides for a few hours a day or several days a week gives family caregivers essential respite time to recharge, attend to personal errands, and rest.</p><h4>Building a Support Network</h4><p>Joining local caregiver support groups and leaning on home medical social workers provides emotional validation and practical resources during difficult transitions.</p>',
                'meta_title' => 'Preventing Caregiver Burnout Guide | Angels Home Health',
                'meta_description' => 'Effective self-care strategies and professional respite care support for family caregivers.',
                'meta_keywords' => 'caregiver burnout, respite care, family caregiver support, home health aide',
                'is_active' => true,
            ],
            [
                'category_slug' => 'chronic-disease-management',
                'title' => 'Managing Congestive Heart Failure (CHF) at Home',
                'slug' => 'managing-congestive-heart-failure-chf-at-home',
                'image' => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&q=80&w=800',
                'short_description' => 'Living with heart failure requires daily weight monitoring, fluid tracking, and symptom recognition. Learn how home nursing keeps CHF under control.',
                'description' => '<p>Congestive Heart Failure (CHF) is a chronic condition that requires consistent daily monitoring to prevent fluid overload and emergency hospital visits.</p><h4>Daily Weight & Symptom Tracking</h4><p>A sudden weight gain of 2-3 pounds in 24 hours can indicate fluid retention. Home health nurses educate patients on recording daily weights and monitoring for swelling in ankles or shortness of breath.</p><h4>Sodium and Fluid Restrictions</h4><p>Adhering to physician-prescribed low-sodium diets and fluid intake goals is vital for reducing cardiac strain and keeping blood pressure stable.</p><h4>Medication Adherence & Education</h4><p>Nurses organize pill planners and review complex diuretic schedules, ensuring patients understand when and how to take their cardiac medications safely.</p>',
                'meta_title' => 'Managing CHF at Home | Angels Home Health Care',
                'meta_description' => 'Clinical CHF management, daily weight monitoring, and home nursing support in Florida.',
                'meta_keywords' => 'CHF management, heart failure home care, cardiac nursing, fluid monitoring',
                'is_active' => true,
            ],
        ];

        foreach ($blogs as $blogData) {
            $categorySlug = $blogData['category_slug'];
            unset($blogData['category_slug']);

            if (isset($categories[$categorySlug])) {
                $blogData['category_id'] = $categories[$categorySlug]->id;
                Blog::firstOrCreate(['slug' => $blogData['slug']], $blogData);
            }
        }
    }
}
