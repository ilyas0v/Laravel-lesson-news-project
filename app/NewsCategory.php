<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $fillable = [
        'parent_id', 'name' , 'status' , 'order'
    ];


    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
