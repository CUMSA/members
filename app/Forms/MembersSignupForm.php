<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Carbon\Carbon;
use App\Member;
use App\College;
use App\Course;
use App\Scholarship;

class MembersSignupForm extends Form
{
    public function buildForm()
    {
        $this
            ->addBio()
            ->add('date_of_birth', 'date', ['default_value' => 'YYYY-MM-DD'])
            ->addContacts()
            ->addAcademics()
            ->addSg()
            ->addMembership()
            ->add('submit', 'submit');
    }

    protected function addBio() {
        // Basic bio details.
        $this
            ->add('first_name', 'text')
            ->add('last_name', 'text')
            ->add('gender', 'choice', [
                'choices' => array_combine(Member::$options_gender, Member::$options_gender),
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
            ->add('address_uk', 'textarea', [
                'label' => 'Address (UK)',
                'attr' => ['rows' => 2],
            ])
            ->add('address_home', 'textarea', [
                'label' => 'Address (Home)',
                'attr' => ['rows' => 3],
            ]);
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
        // TODO: improve this by offering a checkbox for SG, MY and textbox for others?
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

    protected function addMembership() {
        $this
            ->add('membership_type', 'choice', [
                'choices' => array_combine(Member::$options_allowed_membership_type, Member::$options_membership_type_with_cost),
                'expanded' => true,
            ])
            ->add('hear_about_cumsa', 'choice', [
                'label' => 'How did you hear about CUMSA?',
                'choices' => [
                    'friend' => 'Friend/Family',
                    'event_fresher' => 'CUMSA fresher event',
                    'event_other' => 'Other CUMSA event',
                    'online' => 'Online search',
                    'cusu' => 'CUSU society list',
                ],
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('release_info_blurb', 'static', [
                'label' => false,
                'value' => "While CUMSA acknowledges the importance of data privacy, we may occasionally need to release members' details to sponsors.",
            ])
            ->add('release_info', 'checkbox', [
                'label' => 'I am aware',
            ]);

        return $this;
    }
}
