<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    protected  $fillable=['ar_name','en_name','ar_description','en_description','ar_job_title','en_job_title','image'];


    public function getNameAttribute()
    {
        return getLang($this, 'name');
    }

    public function getDescriptionAttribute()
    {
        return getLang($this, 'description');
    }

    public function getJobTitleAttribute()
    {
        return getLang($this, 'job_title');
    }
}
