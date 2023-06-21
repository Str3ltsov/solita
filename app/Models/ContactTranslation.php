<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactTranslation extends Model
{
    public $timestamps = false;

    protected $table = 'contact_translations';

    protected $fillable = ['title'];

    protected $casts = ['title' => 'string'];
}
