<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'name' => 'Eleanor Vance',
                'phone' => '+1 (352) 849-2041',
                'email' => 'eleanor.vance@example.com',
                'service' => 'Skilled Nursing & Rehabilitation',
                'notes' => 'Post-op hip replacement care required 3x weekly. Needs wound dressing and medication management.',
                'is_read' => false,
                'created_at' => now()->subMinutes(15),
            ],
            [
                'name' => 'Robert Sterling',
                'phone' => '+1 (352) 771-9302',
                'email' => 'r.sterling@example.com',
                'service' => 'Physical & Occupational Therapy',
                'notes' => 'Gait rehabilitation and home balance assessment needed for senior parent living in Mount Dora.',
                'is_read' => false,
                'created_at' => now()->subHours(2),
            ],
            [
                'name' => 'Margaret Miller',
                'phone' => '+1 (352) 402-1834',
                'email' => 'mmiller@example.com',
                'service' => "Alzheimer's & Dementia Care",
                'notes' => 'Family respite care & memory safety routine inquiries. Seeking morning assistance 4 days a week.',
                'is_read' => true,
                'created_at' => now()->subDay(),
            ],
            [
                'name' => 'David Hassel',
                'phone' => '+1 (352) 991-4420',
                'email' => 'david.hassel@example.com',
                'service' => 'Chronic Disease Management',
                'notes' => 'CHF vital sign tracking, low-sodium nutrition guidance, and oxygen monitoring.',
                'is_read' => true,
                'created_at' => now()->subDays(2),
            ],
            [
                'name' => 'Clara Barton',
                'phone' => '+1 (352) 630-1198',
                'email' => 'cbarton@example.com',
                'service' => 'Behavioral Health Services',
                'notes' => 'Inquiring about psychiatric nursing and senior anxiety support following recent hospital stay.',
                'is_read' => true,
                'created_at' => now()->subDays(4),
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
