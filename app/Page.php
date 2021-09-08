<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name','title'];
    protected $fillable=['name','title','image'];

    public function setImageAttribute($value)
    {
        if (!is_null($value))
            $this->attributes['image'] = uploadFile($value);
    }

    public function getImageAttribute($value): string
    {
        return asset($value);
    }
}
