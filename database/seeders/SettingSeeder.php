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
            'address' => '3400, CR 19-A, Mt Dora, FL 32757, U. S.',
            'email' => 'info@angelshomehealthfl.com',
            'phone' => '+1 352 729 2727',
            'phone_raw' => '+13527292727',
            'fax' => '352-729-2732',
            'whatsapp' => '+1 (352) 729-2727',
            'whatsapp_raw' => '+13527292727',
            'location' => 'Mount Dora, FL & Surrounding Areas',
            'working_hours' => 'Monday – Friday: 8:00 AM - 4:30 PM (Saturday & Sunday: Closed / On-Call for Emergencies)',
            'google_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3496.018079277115!2d-81.6788339!3d28.8085351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e7a3a616e31e15%3A0xf9e4d888116a92df!2sAngels%20Home%20Care!5e0!3m2!1sen!2sin!4v1793974083029!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>',
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
