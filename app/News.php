<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'category_id');
    }
}
