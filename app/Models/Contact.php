<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title'];

    protected $table = 'contacts';

    protected $fillable = [
        'description',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'description' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
