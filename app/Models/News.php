<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

class News extends BaseModel
{
    use HasTimestamps;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'image'
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}