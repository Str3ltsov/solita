<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlockTranslation extends Model
{
    public $timestamps = false;

    protected $table = 'block_translations';

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
