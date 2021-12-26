<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];


    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::deleted(function ($media) {
            $path = $media->path;
            \Log::debug($path);
            unlink($path);
        });
    }

    /**
     * Get the parent image model.
     */
    public function imageable()
    {
        return $this->morphTo();
    }

    /**
     * Set the path
     *
     * @param  string  $value
     * @return void
     */
    public function setPathAttribute($value)
    {
        if (is_file($value)) {
            return $this->attributes['path'] = uploadFile($value);
        }
    }
}
