<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = ['name', 'title', 'slug', 'en_value', 'ar_value', 'page'];

    public function getValueAttribute()
    {
    	return getLang($this, 'value');
    }
}
