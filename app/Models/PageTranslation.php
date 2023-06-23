<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    public $timestamps = false;

    protected $table = 'page_translations';

    protected $fillable = [
        'name',
        'title',
        'text'
    ];

    protected $casts = [
        'name' => 'string',
        'title' => 'string',
        'text' => 'array'
    ];
}
