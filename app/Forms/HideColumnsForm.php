<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Input;

class HideColumnsForm extends Form
{
    public function buildForm()
    {
        // some 'checkbox'es are for nested headers
        $this
            ->add('Columns', 'choice', [
                'choices' => [
                    'crsid' => 'CRSid',
                    'Bio' => 'Bio',
                    'Nationality' => 'Nationality',
                    'Course' => 'Course/Scholarship/Previous School',
                    'Email' => 'Email',
                    'Contact' => 'Contact',
                    'Address' => 'Address',
                    'Remarks' => 'Remarks',
                ],
                'selected' => ['crsid', 'Bio', 'Nationality', 'Course', 'Email', 'Contact', 'Address', 'Remarks'],
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('Reload Table', 'submit');
    }

    public static function rules(){
        return ['Columns' => 'required'];
    }
}
