<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Page;
use App\Settings;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(Page $page)
    {
        return view('site.pages.page')->with('page',$page);
    }
}
