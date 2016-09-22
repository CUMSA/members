<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public function internship()
    {
        return $this->hasMany('App\Internship');
    }

    public static function rules()
    {
        $rules = [
            'name' => 'required',
            'contact_number' => 'sometimes',
            'email_address' => 'required|email',
            'role_name' => 'required',
            'company_name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'start_date' => 'required|dateformat:Y-m',
            'end_date' => 'required|dateformat:Y-m',
        ];
    }
}
