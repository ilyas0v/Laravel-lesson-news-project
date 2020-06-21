<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\NewsCategory;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all(); //  SELECT * FROM news;
        return view('admin.news.index',  compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = NewsCategory::all();
        return view('admin.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'integer|exists:news_categories,id|nullable',
            'title'   => 'required|min:5|max:100',
            'description'=> 'required|min:5|max:200',
            'body' => 'required|min:10|max:50000',
            'image' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2000',
            'status' => 'required|boolean'
        ]);

        $n = new News();
        $n->title = $request->title;
        $n->description = $request->description;
        $n->body = $request->body;
        $n->status = $request->status;
        $n->category_id = $request->category_id;


        if($request->hasFile('image'))
        {
            $n->image = $request->image->hashName(); //  k24523545k3g524j3h4rf9w7e7.png
            $request->image->storeAs('news', $n->image, 'public');
        }

        $n->save(); // INSERT INTO news(title, desc, body, status) values(....);



        if($request->hasFile('images')){

            foreach($request->images as $image)
            {
                $n->addMedia($image)
                   ->setFileName(\Str::random(10).'-'.$image->getClientOriginalName())
                   ->usingFileName(\Str::random(10).'-'.$image->getClientOriginalName())
                   ->toMediaCollection('images');
            }
        }


        \OneSignal::sendNotificationToAll(
            $n->title, 
            $url = route('front.news.detail', $n->id),
            $data = null, 
            $buttons = null, 
            $schedule = null
        );


        \Session::flash('success_message', 'Xəbər əlavə olundu');
        return redirect()->route('news.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  SELECT * FROM news WHERE id = $id;
        $n = News::findOrFail($id);

        return view('admin.news.show', compact('n'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // SELECT * FROM news WHERE id = $id
        $n = News::findOrFail($id);
        $categories = NewsCategory::all();
        return view('admin.news.edit', compact('n', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'   => 'required|min:5|max:100',
            'description'=> 'required|min:5|max:200',
            'body' => 'required|min:10|max:50000',
            'image' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2000',
            'status' => 'required|boolean'
        ]);

        $n = News::findOrFail($id);
        $n->title = $request->title;
        $n->description = $request->description;
        $n->body = $request->body;
        $n->status = $request->status;


        if($request->hasFile('image'))
        {
            $old_image = $n->image; //  kohne shekil

            $n->image = $request->image->hashName(); //  k24523545k3g524j3h4rf9w7e7.png
            $request->image->storeAs('news', $n->image, 'public');

            if($old_image)
                unlink(base_path() . '/storage/app/public/news/' . $old_image);
        }

        // unlink()


        $n->save(); // INSERT INTO news(title, desc, body, status) values(....);



        if($request->hasFile('images')){

            foreach($request->images as $image)
            {
                $n->addMedia($image)
                   ->setFileName(\Str::random(10).'-'.$image->getClientOriginalName())
                   ->usingFileName(\Str::random(10).'-'.$image->getClientOriginalName())
                   ->toMediaCollection('images');
            }
        }

        

        \Session::flash('success_message', 'Xəbər dəyişdirildi');

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $n = News::findOrFail($id);  
        $image = $n->image;
        $n->delete();   //  DELETE FROM news WHERE id = $id

        if($image)
            unlink(base_path() . '/storage/app/public/news/' . $image);

        \Session::flash('success_message', 'Xəbər silindi');

        return redirect()->route('news.index');
    }
}
