<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $fillable = [
        'name',
        'route',
        'title',
        'text',
        'image',
        'experience_years',
        'show_experience',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'name' => 'string',
        'route' => 'string',
        'title' => 'string',
        'text' => 'array',
        'image' => 'string',
        'experience_years' => 'integer',
        'show_experience' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}