<?php namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Feed
 *
 * The model class for a single feed.
 *
 * @package App
 * @author Rob Attfield <emailme@robertattfield.com> <http://www.robertattfield.com>
 */
class Feed extends Model implements SluggableInterface
{

    protected $table = 'feed';
    public $timestamps = true;

    use SoftDeletes;
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'url', 'url_parameters', 'publisher_id'];
    protected $visible = ['name', 'url', 'url_parameters', 'publisher_id'];

    /**
     * This function gets the associated country for the current feed item.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo('App\Country', 'id');
    }
}
