<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Internship extends Model
{
    protected $dateFormat = 'Y-m';

    protected $fillable = [
        'role_name',
        'related_field',
        'company_name',
        'description',
        'comments_application',
        'location',
        'start_date',
        'end_date',
    ];

    public function link()
    {
        return $this->belongsTo('App\Link');
    }

    public function setStartDateAttribute($startDate) {
        $this->attributes['start_date'] = Carbon::parse($startDate)->toDateTimeString();
        return $this->attributes['start_date'];
    }

    public function setEndDateAttribute($endDate) {
        $this->attributes['end_date'] = Carbon::parse($endDate)->toDateTimeString();
        return $this->attributes['end_date'];
    }

    public static function rules()
    {
        return [
            'role_name' => 'required',
            'company_name' => 'required',
            'related_field' => 'required',
            'location' => 'required',
            'description' => 'required',
            'start_date' => 'required|date|dateformat:Y-m',
            'end_date' => 'required|date|dateformat:Y-m',
        ];
    }

    public static function relatedFields()
    {
        return [
            'tech' => 'Information Technology',
            'finance' => 'Finance',
            'engin' => 'Engineering',
            'edu' => 'Education',
            'science' => 'Science',
            'law' => 'Law',
            'arts' => 'The Arts',
            'consult' => 'Consultancy',
            'other' => 'Other',
        ];
    }
}
