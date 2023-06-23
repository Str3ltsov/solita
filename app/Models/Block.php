<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Block extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = [
        'name',
        'title',
        'text'
    ];

    protected $table = 'blocks';

    protected $fillable = [
        'image',
        'experience_years',
        'show_experience',
        'order',
        'block_type_id',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'image' => 'string',
        'experience_years' => 'integer',
        'show_experience' => 'boolean',
        'order' => 'integer',
        'block_type_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function type(): HasOne
    {
        return $this->hasOne(BlockType::class, 'id', 'block_type_id');
    }
}
