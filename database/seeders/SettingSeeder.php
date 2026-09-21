<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            'address' => '18950 US-441, Mount Dora, FL 32757, United States',
            'email' => 'info@angelshomehealth.com',
            'phone' => '+1 (352) 729-2727',
            'phone_raw' => '+13527292727',
            'whatsapp' => '+1 (352) 729-2727',
            'whatsapp_raw' => '+13527292727',
            'location' => 'Mount Dora, FL & Surrounding Areas',
            'working_hours' => 'Mon - Fri: 8:00 AM - 5:00 PM (24/7 Clinical On-Call Support)',
            'google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111762.65171731617!2d-81.7135894380963!3d28.802146462719574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77519965d1a81%3A0x8bb11c1d041ca91!2sMount%20Dora%2C%20FL%2C%20USA!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus',
            'facebook' => 'https://facebook.com/angelshomehealth',
            'instagram' => 'https://instagram.com/angelshomehealth',
            'linkedin' => 'https://linkedin.com/company/angelshomehealth',
            'twitter' => 'https://twitter.com/angelshomehealth',
            'youtube' => 'https://youtube.com/@angelshomehealth',
        ];

        foreach ($settings as $key => $value) {
            Setting::set($key, $value);
        }
    }
}
