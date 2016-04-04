<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Carbon\Carbon;

class MembersSignupForm extends Form
{
    public function buildForm()
    {
        // Basic bio details.
        $this
            ->add('first_name', 'text', [
                'rules' => 'required|min:1',
            ])
            ->add('last_name', 'text', [
                'rules' => 'required|min:1',
            ])
            ->add('gender', 'choice', [
                'choices' => ['Male' => 'Male', 'Female' => 'Female'],
                'expanded' => true,
                'multiple' => false,
            ]);


        // Contact details.
        $this
            ->add('email_other', 'email', [
                'label' => 'Email',
                'rules' => 'required|email',
            ])
            ->add('mobile_home', 'tel', ['label' => 'Mobile']);

        // Academic details.
        $this
            ->add('college_id', 'choice', [
                'label' => 'College',
                'choices' => \App\College::lists('name', 'id')->all(),
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('course_id', 'choice', [
                'label' => 'Course',
                'choices' => \App\Course::lists('name', 'id')->all(),
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('start_year', 'number', [
                'label' => 'Matriculation year',
                'default_value' => Carbon::today()->year,
            ])
            ->add('end_year', 'number', [
                'label' => 'Graduation year',
                'rules' => 'required',
                'default_value' => (Carbon::today()->year + 3),
            ]);

        // Singapore details.
        $this
            ->add('nric', 'text', ['label' => 'NRIC'])
            ->add('nationality', 'text')
            ->add('is_singapore_pr', 'checkbox', ['label' => 'Singapore PR?'])
            ->add('scholarship_id', 'choice', [
                'label' => 'Scholarship (if any)',
                'choices' => \App\Scholarship::lists('name', 'id')->all(),
                'expanded' => false,
                'multiple' => false,
            ]);

        // TODO: Last school attended.
        // TODO: CUMSA family preference.

        $this
            ->add('submit', 'submit');
    }
}
