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


    public function children()
    {
        return $this->hasMany(self::class , 'parent_id');
    }


    public function scopeOrdering($query)
    {
        return $query->orderBy('order', 'ASC');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
