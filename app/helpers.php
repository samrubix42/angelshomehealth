<?php

use App\Models\Setting;

if (! function_exists('setting')) {
    /**
     * Retrieve a setting value by key with an optional default.
     */
    function setting(string $key, mixed $default = null): mixed
    {
        return Setting::get($key, $default);
    }
}

if (! function_exists('whatsapp_url')) {
    /**
     * Generate a direct WhatsApp chat URL.
     */
    function whatsapp_url(?string $number = null, string $text = 'Hello Angels Home Health, I would like to inquire about home healthcare services.'): string
    {
        $raw = $number ?: (setting('whatsapp') ?: (setting('phone') ?: (setting('whatsapp_raw') ?: setting('phone_raw', '13527292727'))));
        $cleanNumber = preg_replace('/[^0-9]/', '', (string) $raw);

        return 'https://wa.me/'.$cleanNumber.'?text='.urlencode($text);
    }
}

if (! function_exists('phone_url')) {
    /**
     * Generate a tel: URL from phone setting.
     */
    function phone_url(?string $number = null): string
    {
        $raw = $number ?: (setting('phone') ?: setting('phone_raw', '+13527292727'));
        $cleanNumber = preg_replace('/[^0-9+]/', '', (string) $raw);

        return 'tel:'.$cleanNumber;
    }
}
