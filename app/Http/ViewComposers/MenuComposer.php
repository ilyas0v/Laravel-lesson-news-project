<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;

use App\NewsCategory;

class MenuComposer {


    public $categories;


    public function __construct()
    {
        $categories = NewsCategory::all();

        $this->categories = $categories;
    }




    public function compose(View $view)
    {
        $view->with('categories', $this->categories);
    }


}