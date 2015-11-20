<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocaleLanguage extends Model {

	protected $table = 'locale_language';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('short_code', 'long_code', 'name');
	protected $visible = array('short_code', 'long_code', 'name');

    /**
     * Get all of the countries that are assigned this locale/language.
     */
	public function countries(){
		return $this->morphedByMany('App\Country', 'country_locale_language_category');
	}

    /**
     * Get all of the categories that are assigned this locale/language.
     */
	public function categories(){
		return $this->morphedByMany('App\Category', 'country_locale_language_category');
	}

}