<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Member extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     * date_of_birth not included inside here because we want it to remain as a date, rather than a date time.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'created_at', 'modified_at'];

    /**
     * Whitelisted model properties for mass assignment.
     *
     * @var array
     */
    protected $visible = [
        'last_name',
        'first_name',
        'gender',
        'college_id',
        'course_id',
        'start_year',
        'end_year',
        'college_name',
        'course_name',
        'full_name',
    ];

    protected $fillable = [
        'last_name',
        'first_name',
        'gender',
        'college_id',
        'course_id',
        'start_year',
        'end_year',
        'college_name',
        'course_name',
        'full_name',
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
        'scholarship_id',
        'previous_school',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $private_variables = array(
        'registration_time',
        'membership_type',
        'is_fee_paid',
        'is_card_issued',
        'remarks',
    );

    protected $appends = ['college_name', 'scholarship_name', 'course_name', 'full_name'];

    public static $options_gender = array('Male', 'Female');
    public static $options_membership_type = array('Non-member', '1 year', 'Life');
    public static $options_allowed_membership_type = array('1 year', 'Life');
    public static $options_membership_type_with_cost = array('1 year (£8)', 'Life (£15)');

    public function setAllVisible()
    {
        $this->setVisible([]);
        return $this;
    }

    // Default value of rules returned if $option is anything but 'fresher' and 'profile'

    public static function rules($option, $strict = false)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'sometimes|required|dateformat:Y-m-d',
            'email_other' => 'required|email',
            'email_hermes' => 'sometimes|required|email|regex:/^[\w\W]*cam.ac.uk$/',
            'start_year' => 'required|integer|digits:4',
            'end_year' => 'required|integer|digits:4',
            'nationality' => 'required',
            'nric' => ['regex:/^[STFG]\d{7}[A-Z]$/', 'nricformat'],
            'college_id' => 'required',
            'course_id' => 'required',
            'scholarship_id' => 'required',
            'mobile_uk' => 'sometimes|required',
            'address_uk' => 'sometimes|required',
            'release_info' => 'accepted',
            'membership_type' => ['sometimes', 'required', 'in:' . implode(',', static::$options_allowed_membership_type)],
        ];

        if ($option === 'fresher')
        {
            unset($rules['email_hermes']);
            unset($rules['mobile_uk']);
            unset($rules['address_uk']);
            unset($rules['release_info']);
            unset($rules['membership_type']);
        }

        elseif ($option === 'profile')
        {
            unset($rules['release_info']);
            unset($rules['membership_type']);
        }

        if ($strict) {
            $rules = array_merge($rules, [
                'previous_school' => 'sometimes|required',
            ]);
        }
        return $rules;
    }

    public function internlink()
    {
        return $this->hasOne('App\Link');
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

    public function getCollegeNameAttribute() {
        if (isset($this->college)) {
            return $this->college->name;
        } else {
            return $this->college;
        }
    }

    public function getCourseNameAttribute() {
        if (isset($this->course)) {
            return $this->course->name;
        } else {
            return null;
        }
    }

    public function getScholarshipNameAttribute() {
        if (isset($this->scholarship)) {
            return $this->scholarship->name;
        } else {
            return null;
        }
    }

    public function getFullNameAttribute() {
        return $this->first_name . ' ' . $this->last_name;
    }
}
