<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model {

	protected $guarded = ['id'];

	/*public function type() {
		$this->hasOne('entity_types');
	}*/

}
