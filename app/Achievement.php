<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Achievement extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];
    protected $fillable = ['name', 'url'];

    public function setUrlAttribute($value)
    {
        if (is_null($value))
            $this->attributes['url'] = uploadFile($value);
    }

    public function getUrlAttribute($value)
    {
        return asset($value);
    }

}
