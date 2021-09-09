<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = ['id'];

    public function getTitleAttribute()
    {
        return getLang($this, 'title');
    }

    public function getDescriptionAttribute()
    {
        return getLang($this, 'description');
    }

    public function setAttachAttribute($values)
    {
    	if (count($values) > 0) {
    		$attachs = [];
    		foreach ($values as $value) {
                $attach = uploadFile($value);
    			$attachs[] = $attach;
    		}
            if (!is_null($this->attach)) {
            	foreach (json_decode($this->attach) as $lst) {
	                deleteImg($lst);
	            }
            //     $myAttachs = json_decode($this->attach);
            //     $attachs = array_merge($myAttachs, $attachs);
            //     // $attachs = $myAttachs;
            }
    		$this->attributes['attach'] = json_encode($attachs);
    	}
    }

    public function getAttachListAttribute()
    {
    	if (is_null($this->attach)) {
    		return [];
    	}
    	$attachs = json_decode($this->attach, true);
    	$results = [];
    	foreach ($attachs as $attach) {
//    	    \Str::words().
            if (count(explode('storage',$attach))>1){
                $attach=asset($attach);
            }else{
                $attach=getimg($attach);
            }
    		$attach = asset($attach);
    		$results[] = $attach;
    	}

    	return $results;
    }
}
