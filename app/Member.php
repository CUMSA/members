<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['date_of_birth', 'deleted_at', 'created_at', 'modified_at'];

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
        'college_id',
        'course_id',
        'scholarship_id',
        'previous_school',
    );

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

    public static $options_gender = array('Male', 'Female');
    public static $options_membership_type = array('Non-member', '1 year', 'Life');

    public static function rules($strict = false)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'sometimes|required',
            'email_other' => 'required|email',
            'email_hermes' => 'sometimes|required|email',
            'mobile_uk' => 'sometimes|required',
            'start_year' => 'required|integer',
            'end_year' => 'required|integer',
            'nationality' => 'required',
            'nric' => ['regex:/^[STFG]\d{7}[A-Z]$/', 'nricformat'],
            'college_id' => 'required',
            'course_id' => 'required',
            'scholarship_id' => 'required',
        ];
        if ($strict) {
            $rules = array_merge($rules, [
                'previous_school' => 'required',
            ]);
        }
        return $rules;
    }

    public function college()
    {
        return $this->belongsTo('App\College');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function scholarship()
    {
        return $this->belongsTo('App\Scholarship');
    }

}
