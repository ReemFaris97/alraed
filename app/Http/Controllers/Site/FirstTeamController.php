<?php

namespace App\Http\Controllers\Site;

use App\FirstTeam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstTeamController extends Controller
{
    public function index()
    {
        $first_teams = FirstTeam::get();
        return view('site.pages.f_team',compact('first_teams'));
    }
}
