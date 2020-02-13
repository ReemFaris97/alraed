<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable=['image','url','ar_name','en_name'];

    public  function getNameAttribute(){

        return getLang($this, 'name');
    }
}
