<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    protected $fillable = [
        'news_id',
        'name',
        'email',
        'phone',
        'body',
    ];
}
