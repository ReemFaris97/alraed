<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Requests\VolunteerRequest;
use App\Http\Requests\DesireRequest;
use App\Http\Controllers\Controller;
use App\Banner;
use App\News;
use App\Match;
use App\Partner;
use App\Category;
use App\OurTeam;
use App\Multimedia;
use App\Settings;
use App\Volunteer;
use App\Event;
use App\Desire;

class HomeController extends Controller
{

    public function index()
    {
    	$banners = Banner::latest()->limit(10)->latest()->first()->get();
    	$next_match = Match::whereDate('date', '>=', date('Y-m-d H:i:s'))->oldest('date')->first();
    	$previous_matches = Match::whereDate('date', '<=', date('Y-m-d H:i:s'))->oldest('date')->limit(2)->get();
        if (!is_null($next_match)) {
    	   $next_matches = Match::whereDate('date', '>=', date('Y-m-d H:i:s'))->where('id', '<>', $next_match->id)->oldest('date')->limit(2)->get();
        } else {
            $next_matches = [];
        }
    	// $category = Category::where('en_name', 'like', '%football%')->first();
    	// $football_news = News::where('category_id', $category->id)->latest()->limit(3)->get();
    	// $news = News::where('category_id', '<>',$category->id)->latest()->limit(3)->get();
        $news = News::latest()->limit(3)->get();
        $top_news = News::latest()->limit(8)->get();
        $multimedia = Multimedia::latest()->limit(5)->get();
    	$partners = Partner::all();
    	return view('site.pages.index', compact('banners', 'next_match', 'news', 'top_news','next_matches', 'previous_matches', 'partners', 'multimedia'));
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
        $previous_matches = Match::whereDate('date', '<=', date('Y-m-d H:i:s'))->where('id', '<>', $match->id)->where(function($q) use ($match){
          $q->where('first_team_id', $match->first_team_id)->where('second_team_id', $match->second_team_id);  
        })->orWhere(function($q) use ($match){
          $q->where('first_team_id', $match->second_team_id)->where('second_team_id', $match->first_team_id);
        })->oldest('date')->limit(10)->get();
        
        return view('site.pages.match-details', compact('match', 'previous_matches'));
    }

    public function news()
    {
        $news = News::latest()->paginate(5);
        return view('site.pages.news', compact('news'));
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
        $football = Settings::where('name', 'football')->first();
        $khadem_cup = Settings::where('name', 'khadem_cup')->first();
        return view('site.pages.about', compact('football', 'khadem_cup'));
    }

    public function otherSports()
    {
        return view('site.pages.other_sports');
    }
    public function karateh()
    {
        return view('site.pages.karateh');
    }
    public function boxing()
    {
        return view('site.pages.boxing');
    }
    public function tennis()
    {
        return view('site.pages.tennis');
    }
    public function handball()
    {
        return view('site.pages.handball');
    }
    public function electronic()
    {
        return view('site.pages.electronic');
    }

    public function volunteer($lang = 'ar')
    {
        app()->setLocale($lang);
        return view('site.pages.volunteer');
    }

    public function postVolunteer(VolunteerRequest $request)
    {
        $data = $request->except(['other_qualification', 'other_work_type']);
        if (!empty($request->other_qualification)) {
            $data['qualification'] = $request->other_qualification;
        }
        if (!empty($request->other_work_type)) {
            $data['work_type'] = $request->other_work_type;
        }
        Volunteer::create($data);
        return back()->with('success', __('trans.add_success'));
    }

    public function desires($lang = 'ar')
    {
        app()->setLocale($lang);
        return view('site.pages.desires');
    }

    public function postDesires(DesireRequest $request)
    {
        Desire::create($request->all());
        return back()->with('success', __('trans.add_success'));
    }
    
    public function soical_responsible()
    {
        $events = Event::latest()->paginate(15);
        return view('site.pages.soical_responsible', compact('events'));
    }

    public function showSocial(Event $event)
    {
        return view('site.pages.soical', compact('event'));
    }
}
