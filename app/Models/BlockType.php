<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockType extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'block_types';

    protected $fillable = ['name'];

    protected $casts = ['name' => 'string'];
}