<?php

namespace App\Models;

class Language extends BaseModel
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code'
    ];

    public function news_items()
    {
        return $this->hasMany(News::class);
    }
}