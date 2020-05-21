<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class PageController extends Controller
{
    
    public function home()
    {
        $news = News::orderBy('created_at', 'DESC')->get();
        return view('front.home', compact('news'));
    }



    public function news_detail($id)
    {
        $news = News::findOrFail($id); // select * from news where id = $id;
        
        return view('front.news_detail', compact('news'));
    }
}

