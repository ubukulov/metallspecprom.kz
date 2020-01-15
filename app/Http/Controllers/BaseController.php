<?php

namespace App\Http\Controllers;

use App\Page;
use App\Settings;
use Illuminate\Http\Request;
use View;
use App\Category;

class BaseController extends Controller
{
    public function __construct()
    {
        $cats = Category::where('active', 1)->get()->toTree();
        $pages = Page::all();
        $settings = Settings::findOrFail(1);
        View::share('cats', $cats);
        View::share('pages', $pages);
        View::share('settings', $settings);
    }
}
