<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'is_activate',
    ];

    protected function casts(): array
    {
        return [
            'is_activate' => 'boolean',
        ];
    }
}
