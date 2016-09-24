<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Link extends Model
{
    public function internship()
    {
        return $this->hasMany('App\Internship');
    }

    public function member()
    {
        return $this->belongsTo('App\Member');
    }

    public static function rules()
    {
        $rules = [
            'contact_options' => 'required',
            'internship.*.role_name' => 'required',
            'internship.*.company_name' => 'required',
            'internship.*.location' => 'required',
            'internship.*.description' => 'required',
            'internship.*.start_date' => 'required|dateformat:Y-m',
            'internship.*.end_date' => 'required|dateformat:Y-m',
        ];
        return $rules;
    }
}
