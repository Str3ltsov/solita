<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
        'title',
        'text'
    ];

    protected $table = 'pages';

    protected $fillable = [
        'route',
        'image',
        'experience_years',
        'show_experience',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'route' => 'string',
        'image' => 'string',
        'experience_years' => 'integer',
        'show_experience' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
