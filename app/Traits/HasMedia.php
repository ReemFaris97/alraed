<?php

namespace App\Traits;

use App\Media;

trait HasMedia
{
    /**
     * Get the parent image model.
     */
    public function images()
    {
        return $this->morphMany(Media::class, 'model');
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
