<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model {

	protected $table = 'region';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name', 'meta_desc', 'long_desc');
	protected $visible = array('name', 'meta_desc', 'long_desc');

	public function country()
	{
		return $this->belongsTo('App\Country', 'id');
	}

}