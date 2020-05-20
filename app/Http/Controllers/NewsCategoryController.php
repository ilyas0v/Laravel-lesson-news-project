<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsCategory;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_categories = NewsCategory::all();
        return view('admin.news_category.index', compact('news_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = NewsCategory::all();
        return view('admin.news_category.create', compact('categories'));
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
            'parent_id' => 'integer|exists:news_categories,id|nullable',
            'name'      => 'string|max:100',
            'status'    => 'boolean|nullable',
            'order'     => 'integer|max:10000|nullable',
        ]);


        $category  =  NewsCategory::create([
            'parent_id' => $request->parent_id,
            'name'      => $request->name,
            'status'    => $request->status,
            'order'     => $request->order,
        ]);

        \Session::flash('success_message', 'Kategoriya əlavə olundu');
        return redirect()->route('news_category.index');

        // $category = new NewsCategory();
        // $category->parent_id = $request->parent_id;
        // $category->name      = $request->name;   
        // $category->status    = $request->status;   
        // $category->order     = $request->order;
        // $category->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
