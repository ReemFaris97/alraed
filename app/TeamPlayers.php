<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamPlayers extends Model
{
    protected $fillable=['team_id','country_id','ar_name','en_name','age','length','position','appearance','image'];

    public function team(){

        return$this->belongsTo(Team::class,'team_id');
    }

    public function country(){

        return $this->belongsTo( Country::class, 'country_id');
    }


    public function getNameAttribute(){
        return getLang($this,'name');
    }
}
