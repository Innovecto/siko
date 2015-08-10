<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = [
    	'family_number', 
    	'leader', 
    	'issued_date', 
    	'province', 
    	'city', 
    	'subdistrict', 
    	'village', 
    	'cluster', 
    	'subcluster'
    ];
}
