<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class OtherGame extends Model
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

        static::deleted(function ($game) {
            $game->images()->delete();
        });
    }

    /**
     * Get all of the post's images.
     */
    public function images()
    {
        return $this->morphMany(Media::class, 'model');
    }

    /**
     * Get the coverImage associated with the OtherGame
     *
     * @return void
     */
    public function coverImage()
    {
        // return $this->images()->first();
    }

    public function createImages(array $images)
    {
        foreach ($images as $key => $value) {
            $this->images()->create(['path' => $value]);
        }
    }
}
