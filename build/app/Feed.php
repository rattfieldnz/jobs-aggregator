<?php namespace App;

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
class Feed extends Model
{

    protected $table = 'feed';
    public $timestamps = true;

    use SoftDeletes;

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
