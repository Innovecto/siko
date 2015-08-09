<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyMembers extends Model
{
    protected $fillable = [
    	'family_id', 
    	'member_id', 
    	'education', 
    	'occupation', 
    	'family_relation_id', 
    	'nationality', 
    	'passport_number', 
    	'visa_number', 
    	'father_name', 
    	'father_id', 
    	'mother_name', 
    	'mother_id'
    ];
}
