<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $fillable=['first_team_id','second_team_id','match_id','first_team_goals','second_team_goals',
        'first_team_corners','second_team_corners','first_team_Offside','second_team_Offside',
        'first_team_YCard','second_team_YCard','first_team_RCard','second_team_RCard'];

    public function matches(){

        return $this->belongsTo(Game::class, 'match_id','id');
    }


    public  function FirstTeam(){

        return $this->belongsTo(Team::class,'first_team_id','id');
    }

    public  function SecondTeam(){

        return $this->belongsTo(Team::class,'second_team_id','id');
    }
}
