<?php namespace AH;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
	{

    protected $fillable = [ 'code', 'name' ];
    public $timestamps = FALSE;

	}
