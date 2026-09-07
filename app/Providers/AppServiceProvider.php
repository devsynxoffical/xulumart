<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Share full parent->child category tree with the header + mobile
        // menu on EVERY page (fixes "$categories undefined" on non-home pages
        // and removes the old limit(8) restriction so all top-level
        // categories (MEN, WOMEN, KIDS, KIDS TOYS, HANDICRAFT ITEMS, etc.)
        // show up in the navigation, however many there are).
        View::composer(
            ['layouts.laramart.header', 'layouts.laramart.canvases'],
            function ($view) {
                $categories = Category::with(['child' => function ($q) {
                        $q->where('is_active', 1)->orderBy('position', 'ASC');
                    }])
                    ->where('is_active', 1)
                    ->where('parent_id', 0)
                    ->orderBy('position', 'ASC')
                    ->get();

                $view->with('categories', $categories);
            }
        );
    }
}