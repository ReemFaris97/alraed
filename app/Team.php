<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=['ar_name','en_name','image'];

    public function getNameAttribute()
    {
        return getLang($this, 'name');
    }
}
