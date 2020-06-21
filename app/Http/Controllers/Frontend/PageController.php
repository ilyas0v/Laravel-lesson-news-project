<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class PageController extends Controller
{
    
    public function home(Request $request)
    {
        $category_id = $request->category;

        if($category_id)
        {
            $news = News::where('category_id', $category_id)
                        ->active()
                        ->ordering()
                        ->get();  //  SELECT * FROM news WHERE category_id = $category_id ORDER By created_at DESC;
        }else
        {
            $news = News::active()
                        ->ordering()
                        ->get();     
        }


        return view('front.home', compact('news'));
    }



    public function news_detail($id)
    {
        $news = News::findOrFail($id); // select * from news where id = $id;
        
        return view('front.news_detail', compact('news'));
    }






    public function add_comment(Request $request, $id)
    {
        $this->validate($request , [
            'name'   => 'required|max:30|string',
            'email'  => 'required|max:50|email|string',
            'phone'  => 'max:20|nullable|string',
            'body'   => 'required|max:5000|string'
        ]);

        $news = News::findOrFail($id);

        $news->comments()->create($request->all());

        return redirect()->route('front.news.detail', $news->id);
    }






    public function search(Request $request)
    {

        $q = $request->q;


        $news = News::where('title', 'LIKE' , "%$q%")
                       ->orWhere('description', 'LIKE' , "%$q%")
                       ->orWhere('body', 'LIKE', "%$q%")
                       ->active()
                       ->get(); 
                       
        return view('front.home', compact('news'));

    }
}

