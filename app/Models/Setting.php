<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
    ];

    /**
     * In-memory cache for the current request cycle.
     */
    protected static array $inMemorySettings = [];

    /**
     * Retrieve a setting by key with optional default.
     */
    public static function get(string $key, mixed $default = null): mixed
    {
        if (array_key_exists($key, static::$inMemorySettings)) {
            return static::$inMemorySettings[$key] ?? $default;
        }

        $setting = static::where('key', $key)->first();
        $value = ($setting && $setting->value !== null && $setting->value !== '') ? $setting->value : $default;

        static::$inMemorySettings[$key] = $value;

        return $value;
    }

    /**
     * Set a setting value.
     */
    public static function set(string $key, ?string $value): static
    {
        $setting = static::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );

        static::$inMemorySettings[$key] = $value;

        return $setting;
    }
}
