<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Families extends Model
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
