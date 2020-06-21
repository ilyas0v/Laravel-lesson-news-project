<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('front.partials.header', 'App\Http\ViewComposers\MenuComposer');
    
        View::composer('front.partials.header', function($view) {

            $categories  = \App\NewsCategory::where('parent_id', NULL)
                                            ->active()
                                            ->ordering()
                                            ->get();

            $view->with('categories', $categories);
        });
    
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
