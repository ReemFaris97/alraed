<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['category_id', 'ar_title', 'en_title', 'ar_description', 'en_description',
        'ar_writer_name', 'en_writer_name', 'image'];


    public function category()
    {

        return $this->belongsTo(Category::class, 'category_id', 'id')->withDefault('تم حذف القسم للأسف');
    }

    public function getTitleAttribute()
    {
        return getLang($this, 'title');
    }

    public function getDescriptionAttribute()
    {
        return getLang($this, 'description');
    }

    public function getWriterNameAttribute()
    {
        return getLang($this, 'writer_name');
    }




}
