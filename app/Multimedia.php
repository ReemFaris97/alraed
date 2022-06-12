<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    protected  $fillable=['ar_title','en_title','ar_description','en_description','type'];


    public function getTitleAttribute()
    {
        return getLang($this, 'title');
    }

    public function getDescriptionAttribute()
    {
        return getLang($this, 'description');
    }
    public function images()
    {
        return $this->morphMany(Media::class, 'model');
    }
    public function createImages(array $images)
    {
        foreach ($images as $key => $value) {
            $this->images()->create(['path' => $value]);
        }
    }
}
