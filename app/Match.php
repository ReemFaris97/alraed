<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable=['first_team_id','second_team_id','stadium','champion_id','date','ar_name','en_name', 'goals_first_team', 'goals_second_team'];
    protected $dates = ['date'];

    public function FirstTeam(){

        return $this->belongsTo(Team::class,'first_team_id','id');
    }

    public function SecondTeam(){

        return $this->belongsTo(Team::class,'second_team_id','id');
    }

    public function Champion(){

        return $this->belongsTo(Champion::class,'champion_id');
    }

    public function getNameAttribute(){

        return getLang($this,'name');
    }

    public function goals()
    {
        return $this->hasMany(Goal::class);
    }

    public function lineups()
    {
        return $this->hasMany(Lineup::class);
    }

}
