<?php namespace App;

use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Country
 *
 * The model class for a country.
 *
 * @package App
 * @author Rob Attfield <emailme@robertattfield.com> <http://www.robertattfield.com>
 */
class Country extends Model
{

    protected $table = 'country';
    public $timestamps = true;

    use SoftDeletes;
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'meta_desc', 'long_desc'];
    protected $visible = ['name', 'meta_desc', 'long_desc'];

    /**
     * Retrieves the associated regions for the current country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regions()
    {
        return $this->hasMany('App\Region', 'id');
    }

    /**
     * Retrieves the associated regions for the current country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function feeds()
    {
        return $this->hasMany('App\Feed', 'id');
    }

    /**
     * Get all of the locales/languages for this country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function localeLanguages()
    {
        return $this->morphToMany('App\LocaleLanguage', 'country_locale_language_category');
    }

    /**
     * Get all of the categories for this country.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function categories()
    {
        return $this->morphToMany('App\Category', 'country_locale_language_category');
    }
}
