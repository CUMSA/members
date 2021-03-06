<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        'course_type',
    );

    public function getCourseWithTypeAttribute() {
        if ($this->name == 'None') {
            return $this->name;
        }
        return $this->course_type . ' - ' . $this->name;
    }

    public function members()
    {
        return $this->belongstoMany('App\Member');
    }
}
