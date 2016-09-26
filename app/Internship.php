<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $fillable = [
        'role_name',
        'related_field',
        'company_name',
        'description',
        'location',
        'start_date',
        'end_date',
    ];

    public function link()
    {
        return $this->belongsTo('App\Link');
    }

    public function hasKeyword($keyword)
    {
        if(stripos(implode("", $this->toArray()), $keyword) !== false)
        {
            return true;
        }

        else return false;
    }

    public static function rules()
    {
        return [
            'role_name' => 'required',
            'company_name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'start_date' => 'required|dateformat:Y-m',
            'end_date' => 'required|dateformat:Y-m',
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
