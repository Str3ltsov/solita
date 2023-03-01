<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PageText extends Model
{
    use HasFactory;

    public $table = 'page_texts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'page_id',
        'html_text'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'page_id' => 'integer',
        'html_text' => 'array'
    ];

    public function page(): HasOne
    {
        return $this->hasOne(Page::class, 'id', 'page_id');
    }
}
