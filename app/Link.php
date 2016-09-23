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
            'role_name' => 'required',
            'company_name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'start_date' => 'required|dateformat:Y-m',
            'end_date' => 'required|dateformat:Y-m',
        ];
        return $rules;
    }
}
