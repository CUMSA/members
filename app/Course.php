<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Whitelisted model properties for mass assignment.
     *
     * @var array
     */
    protected $fillable = array(
        'name',
    );

    public function members()
    {
        return $this->belongstoMany('App\Member');
    }
}
