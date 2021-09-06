<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable=['match_id','team_id','player_id','minuit'];

    public function match(){

        return $this->belongsTo(Game::class,'match_id');
    }

    public function team(){

        return $this->belongsTo(Team::class,'team_id')->with('players');
    }

    public function player(){
         return $this->belongsTo(TeamPlayers::class,'player_id');
    }
}
