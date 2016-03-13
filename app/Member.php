<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['date_of_birth', 'deleted_at'];

    /**
     * Whitelisted model properties for mass assignment.
     *
     * @var array
     */
    protected $fillable = array(
        'last_name',
        'first_name',
        'gender',
        'date_of_birth',
        'nationality',
        'is_singapore_pr',
        'nric',
        'crsid',
        // email_hermes is present because some are not derivable (e.g. department emails).
        'email_hermes',
        'email_other',
        'mobile_uk',
        'mobile_home',
        'address_home',
        'address_uk',
        'release_info',
    );

    public function college()
    {
        return $this->hasOne('App\College');
    }

    public function course()
    {
        return $this->hasOne('App\Course');
    }

    public function scholarship()
    {
        return $this->hasOne('App\Scholarship');
    }

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = array(
        'start_year',
        'end_year',
        'registration_time',
        'membership_type',
        'is_fee_paid',
        'is_card_issued',
        'remarks',
    );
}
