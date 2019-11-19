<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lineup extends Model
{
    
    protected $fillable = ['match_id', 'player_id', 'team_id', 'x_axis', 'y_axis'];

    public function match()
    {
    	return $this->belongsTo(Match::class);
    }

    public function team()
    {
    	return $this->belongsTo(Team::class);
    }

    public function player()
    {
    	return $this->belongsTo(TeamPlayers::class);
    }
}
