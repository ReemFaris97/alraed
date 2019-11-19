<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    protected  $fillable=['ar_title','en_title','ar_description','en_description','image'];


    public function getTitleAttribute()
    {
        return getLang($this, 'title');
    }

    public function getDescriptionAttribute()
    {
        return getLang($this, 'description');
    }
}
