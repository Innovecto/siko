<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {
	protected $fillable = [
		'name',
		'zipcode',
		'parent',
		'level',
		'leader',
	];

	public function scopeDki($query) {

		return $query->whereRaw('parent = 11 or parent in (select id from locations where parent = 11)
								 or parent in (select id from locations where parent in (select id from locations where parent = 11))
								 or parent in (select id from locations where parent in (select id from locations where parent in (select id from locations where parent = 11)))');

	}
}
