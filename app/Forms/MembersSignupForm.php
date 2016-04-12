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
        $this
            ->addBio()
            ->add('date_of_birth', 'date')
            ->addContacts()
            ->addAcademics()
            ->addSg()
            ->add('submit', 'submit');
    }

    protected function addBio() {
        // Basic bio details.
        $this
            ->add('first_name', 'text')
            ->add('last_name', 'text')
            ->add('gender', 'choice', [
                'choices' => ['Male' => 'Male', 'Female' => 'Female'],
                'expanded' => true,
                'multiple' => false,
            ]);
        return $this;
    }

    protected function addContacts() {
        // Contact details.
        return $this
            ->add('email_hermes', 'email', ['label' => 'Email (Cambridge)'])
            ->add('email_other', 'email', ['label' => 'Email (other)'])
            ->add('mobile_uk', 'tel', ['label' => 'Contact (UK)'])
            ->add('mobile_home', 'tel', ['label' => 'Contact (Home)'])
            ->add('address_uk', 'textarea', ['label' => 'Address (UK)', 'rows' => 3])
            ->add('address_home', 'textarea', ['label' => 'Address (Home)']);
        return $this;
    }

    protected function addAcademics() {
        // Academic details.
        $this
            ->add('college_id', 'entity', [
                'label' => 'College',
                'class' => 'App\College',
                'selected' => College::where('name', 'None')->value('id'),
            ])
            ->add('course_id', 'entity', [
                'label' => 'Course',
                'class' => 'App\Course',
                'property' => 'course_with_type',
                // ::get()->list() necessary for custom accessors + list()
                // see https://web.archive.org/web/20151011072132/http://www.neontsunami.com/posts/using-lists%28%29-in-laravel-with-custom-attribute-accessors
                'query_builder' => function($obj) { return $obj::get(); },
                'selected' => Course::where('name', 'None')->value('id'),
            ])
            ->add('start_year', 'number', [
                'label' => 'Matriculation year',
                'default_value' => Carbon::today()->year,
            ])
            ->add('end_year', 'number', [
                'label' => 'Graduation year (estimated)',
                'default_value' => (Carbon::today()->year + 3),
            ]);
        return $this;
    }

    protected function addSg() {
        // Singapore details.
        $this
            ->add('nationality', 'text')
            ->add('is_singapore_pr', 'checkbox', ['label' => 'Singapore PR?'])
            ->add('nric', 'text', ['label' => 'NRIC'])
            ->add('scholarship_id', 'entity', [
                'label' => 'Scholarship',
                'class' => 'App\Scholarship',
                'selected' => Scholarship::where('name', 'None')->value('id'),
            ]);
        return $this;
    }
}
