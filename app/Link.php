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

    public function resetContact()
    {
        $this->show_uk_phone = false;
        $this->show_home_phone = false;
        $this->show_hermes_email = false;
        $this->show_other_email = false;
    }

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
        return [
            'contact_options' => 'required',
        ];
    }
}
