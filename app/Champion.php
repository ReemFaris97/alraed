<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    protected $fillable=['ar_title','en_title','image'];

    public function getTitleAttribute(){

        return getLang($this,'title');
    }
}
