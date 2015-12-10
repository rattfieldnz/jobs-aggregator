<?php namespace App;

use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Region
 *
 * The model class for a region.
 *
 * @package App
 * @author Rob Attfield <emailme@robertattfield.com> <http://www.robertattfield.com>
 */
class Region extends Model
{

    protected $table = 'region';
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
     * This function retrieves the associated country for the current region.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo('App\Country', 'id');
    }
}
