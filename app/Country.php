<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable=['ar_name','en_name'];

    public function getNameAttribute()
    {
        return getLang($this, 'name');
    }
}
