<?php namespace AH;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
	{

    public function user()
    	{

        return $this->belongsTo( User::class );

    	}

	}
