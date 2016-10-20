<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Link extends Model
{
    protected $fillable = [
        'show_uk_phone',
        'show_home_phone',
        'show_hermes_email',
        'show_other_email',
        'describe_self',
    ];

    public function internships()
    {
        return $this->hasMany('App\Internship');
    }

    public function member()
    {

        return $this->belongsTo('App\Member');
    }

    public static function rules()
    {
        // Spaces in front of commas removed because they cause validation to become wonky
        return [
            'show_home_phone' => 'required_without_all:show_uk_phone,show_other_email,show_hermes_email',
            'show_uk_phone' => 'required_without_all:show_home_phone,show_hermes_email,show_other_email',
            'show_hermes_email' => 'required_without_all:show_home_phone,show_other_email,show_uk_phone',
            'show_other_email' => 'required_without_all:show_uk_phone,show_hermes_email,show_home_phone',
        ];
    }
}