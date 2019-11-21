<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\News;
use App\Match;
use App\Partner;
use App\Category;
use App\OurTeam;
use App\Multimedia;
use App\Settings;

class HomeController extends Controller
{
    
    public function index()
    {
    	$banners = Banner::latest()->limit(3)->get();
    	$next_match = Match::whereDate('date', '>=', date('Y-m-d H:i:s'))->oldest()->first();
    	$previous_matches = Match::whereDate('date', '<=', date('Y-m-d H:i:s'))->oldest()->limit(2)->get();
        if (!is_null($next_match)) { 
    	   $next_matches = Match::whereDate('date', '>=', date('Y-m-d H:i:s'))->where('id', '<>', $next_match->id)->oldest()->limit(2)->get();
        } else {
            $next_matches = [];
        }
    	// $category = Category::where('en_name', 'like', '%football%')->first();
    	// $football_news = News::where('category_id', $category->id)->latest()->limit(3)->get();
    	// $news = News::where('category_id', '<>',$category->id)->latest()->limit(3)->get();
        $news = News::latest()->limit(3)->get();
        $multimedia = Multimedia::latest()->limit(5)->get();
    	$partners = Partner::all();
    	return view('site.pages.index', compact('banners', 'next_match', 'news', 'next_matches', 'previous_matches', 'partners', 'multimedia'));
    }

    public function fTeam()
    {
        $teams = OurTeam::all();
        return view('site.pages.f_team', compact('teams'));
    }

    public function schedule()
    {
        $next_match = Match::whereDate('date', '>=', date('Y-m-d H:i:s'))->oldest()->first();
        
        if (!is_null($next_match)) { 
           $next_matches = Match::whereDate('date', '>=', date('Y-m-d H:i:s'))->where('id', '<>', $next_match->id)->oldest()->limit(8)->get();
        } else {
            $next_matches = [];
        }
        return view('site.pages.table', compact('next_match', 'next_matches'));        
    }

    public function matchDetails(Match $match)
    {
        return view('site.pages.match-details', compact('match'));
    }

    public function news()
    {
        $newsCount = News::latest()->count();
        return view('site.pages.news', compact('newsCount'));
    }

    public function moreNews()
    {
        $news = News::latest()->paginate(10);
        foreach ($news as $snews) {
            $snews->title = $snews->title;
            $snews->description = $snews->description;
            $snews->writer_name = $snews->writer_name;
            $snews->category_name = $snews->category->name;
            $snews->created_clock = $snews->created_at->format('d M');
            $snews->created_time = $snews->created_at->format('h:i a');
            $snews->image = getimg($snews->image);
        }
        return response()->json($news);
    }

    public function tickets()
    {
        
    }

    public function multimedia()
    {
        $multimedia = Multimedia::oldest()->paginate(10);
        return view('site.pages.multimedia', compact('multimedia'));
    }

    public function about()
    {
        $abouts = Settings::where('page', 'about')->get();
        return view('site.pages.about', compact('abouts'));
    }

    public function otherSports()
    {
        return view('site.pages.other_sports');
    }

    public function sports()
    {
        return view('site.pages.polaroids');
    }
}
