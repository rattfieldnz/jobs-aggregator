<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feed extends Model {

	protected $table = 'feed';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name', 'url', 'url_parameters', 'publisher_id');
	protected $visible = array('name', 'url', 'url_parameters', 'publisher_id');

	public function country()
	{
		return $this->belongsTo('App\Country', 'id');
	}

}