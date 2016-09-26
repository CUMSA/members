<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    public function link()
    {
        return $this->belongsTo('App\Link');
    }

    public function hasKeyword($keyword)
    {
        if(stripos(implode("", $this->toArray()), $keyword))
        {
            return true;
        }

        else return false;
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
