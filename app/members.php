<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $fillable = [
    	'id_number', 
    	'first_name', 
    	'last_name', 
    	'birthdate', 
    	'birthplace', 
    	'gender', 
    	'religion_id', 
    	'occupation', 
    	'marital_status', 
    	'province', 
    	'city', 
    	'subdistrict', 
    	'village', 
    	'cluster', 
    	'subcluster', 
    	'email', 
    	'password'
    ];


    
}
