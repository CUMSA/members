<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    public function link()
    {
        return $this->belongsTo('App\Link');
    }

    public static function relatedFields()
    {
        return [
            'label' => 'Filter:',
            'choices' => [
                'tech' => 'Information Technology',
                'finance' => 'Finance',
                'engin' => 'Engineering',
                'edu' => 'Education',
                'science' => 'Science',
                'law' => 'Law',
                'arts' => 'The Arts',
                'consult' => 'Consultancy',
                'other' => 'Other',
            ]
        ];
    }
}
