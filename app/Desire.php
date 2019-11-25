<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desire extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'game' => 'array'
    ];

    public function setGameAttribute($value)
    {
    	$properties = [];

	    foreach ($value as $array_item) {
	        
	            $properties[] = $array_item;
	        
	    }
    	$this->attributes['game'] = json_encode($properties);
    }
}
