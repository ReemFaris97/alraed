<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstTeam extends Model
{
    use HasFactory;
    protected $fillable=['ar_name','en_name','image','number','ar_job','en_job'];
    public function getNameAttribute()
    {
        return getLang($this, 'name');
    }
    public function getJobAttribute()
    {
        return getLang($this, 'job');
    }
    public function setImageAttribute($value)
    {
        if (is_file($value)) {
            $this->attributes['image'] = uploadFile($value);
        } else {
            $this->attributes['image'] = $value;
        }
    }


}
