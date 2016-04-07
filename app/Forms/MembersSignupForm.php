<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Carbon\Carbon;
use App\College;
use App\Course;
use App\Scholarship;

class MembersSignupForm extends Form
{
    public function buildForm()
    {
        // Basic bio details.
        $this
            ->add('first_name', 'text')
            ->add('last_name', 'text')
            ->add('gender', 'choice', [
                'choices' => ['Male' => 'Male', 'Female' => 'Female'],
                'expanded' => true,
                'multiple' => false,
            ]);


        // Contact details.
        $this
            ->add('email_other', 'email', [
                'label' => 'Email',
            ])
            ->add('mobile_home', 'tel', ['label' => 'Mobile']);

        // Academic details.
        $this
            ->add('college_id', 'choice', [
                'label' => 'College',
                'choices' => College::lists('name', 'id')->all(),
                'expanded' => false,
                'multiple' => false,
                'default_value' => College::where('name', 'None')->first()->id,
            ])
            ->add('course_id', 'choice', [
                'label' => 'Course',
                'choices' => Course::lists('name', 'id')->all(),
                'expanded' => false,
                'multiple' => false,
                'default_value' => Course::where('name', 'None')->first()->id,
            ])
            ->add('start_year', 'number', [
                'label' => 'Matriculation year',
                'default_value' => Carbon::today()->year,
            ])
            ->add('end_year', 'number', [
                'label' => 'Graduation year',
                'default_value' => (Carbon::today()->year + 3),
            ]);

        // Singapore details.
        $this
            ->add('nric', 'text', ['label' => 'NRIC'])
            ->add('nationality', 'text')
            ->add('is_singapore_pr', 'checkbox', ['label' => 'Singapore PR?'])
            ->add('scholarship_id', 'choice', [
                'label' => 'Scholarship (if any)',
                'choices' => Scholarship::lists('name', 'id')->all(),
                'expanded' => false,
                'multiple' => false,
            ]);

        // TODO: Last school attended.
        // TODO: CUMSA family preference.

        $this
            ->add('submit', 'submit');
    }
}
