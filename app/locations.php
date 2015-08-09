<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    protected $fillable = [
    	'name', 
    	'zipcode', 
    	'parent', 
    	'level', 
    	'leader'
    ];
}
