<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia; 

class News extends Model  implements HasMedia
{    

    use HasMediaTrait;
    
    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'category_id');
    }


    public function comments()
    {
        return $this->hasMany(NewsComment::class, 'news_id');
    }



    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }



    public function scopeOrdering($query)
    {
        return $query->orderBy('created_at', 'DESC');
    }
}
