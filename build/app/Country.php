<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model {

	protected $table = 'country';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name', 'meta_desc', 'long_desc');
	protected $visible = array('name', 'meta_desc', 'long_desc');

	public function region()
	{
		return $this->hasMany('App\Region', 'id');
	}

	public function feeds()
	{
		return $this->hasMany('App\Feed', 'id');
	}

    /**
     * Get all of the locales/languages for this country.
     */
	public function localeLanguages()
	{
		return $this->morphToMany('App\LocaleLanguage', 'country_locale_language_category');
	}

    /**
     * Get all of the categories for this country.
     */
    public function categories(){
        return $this->morphToMany('App\Category', 'country_locale_language_category');
    }

}