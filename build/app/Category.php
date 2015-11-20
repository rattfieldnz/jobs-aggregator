<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {

	protected $table = 'category';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name');
	protected $visible = array('name');

    /**
     * Get all of the countries that are assigned this category.
     */
	public function countries(){
		return $this->morphedByMany('App\Country', 'country_locale_language_category');
	}

    /**
     * Get all of the locale/languages that are assigned this category.
     */
    public function localeLanguages()
    {
        return $this->morphedByMany('App\LocaleLanguage', 'country_locale_language_category');
    }

}