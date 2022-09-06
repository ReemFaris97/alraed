<?php

namespace App;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    use HasMedia;

    protected  $fillable = [
        'ar_title',
        'en_title',
        'ar_description',
        'en_description',
        'image',
        'type'
    ];


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

    /**
     * Set the image
     *
     * @param  string  $value
     * @return void
     */
    public function setImageAttribute($value)
    {
        return $this->attributes['image'] = uploadFile($value);
    }
}
