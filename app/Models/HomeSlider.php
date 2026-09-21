<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    protected $fillable = [
        'title',
        'paragraph',
        'image',
        'btn_1',
        'btn_1_url',
        'btn_2',
        'btn_2_url',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
