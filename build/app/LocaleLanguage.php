<?php namespace App;

use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LocaleLanguage
 *
 * The model class for a locale/language.
 *
 * @package App
 * @author Rob Attfield <emailme@robertattfield.com> <http://www.robertattfield.com>
 */
class LocaleLanguage extends Model
{

    protected $table = 'locale_language';
    public $timestamps = true;

    use SoftDeletes;
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    protected $dates = ['deleted_at'];
    protected $fillable = ['short_code', 'long_code', 'name'];
    protected $visible = ['short_code', 'long_code', 'name'];

    /**
     * Get all of the countries that are assigned this locale/language.
     */
    public function countries()
    {
        return $this->morphedByMany('App\Country', 'country_locale_language_category');
    }

    /**
     * Get all of the categories that are assigned this locale/language.
     */
    public function categories()
    {
        return $this->morphedByMany('App\Category', 'country_locale_language_category');
    }
}
