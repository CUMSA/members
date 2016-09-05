<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Carbon\Carbon;
use App\Member;
use App\College;
use App\Course;
use App\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;

class UpdateProfileForm extends MembersSignupForm
{
    protected function addAcademics() {
        // Academic details.
        $this
            ->add('college_id', 'entity', [
                'label' => 'College',
                'class' => 'App\College',
            ])
            ->add('course_id', 'entity', [
                'label' => 'Course',
                'class' => 'App\Course',
                'property' => 'course_with_type',
                // ::get()->list() necessary for custom accessors + list()
                // see https://web.archive.org/web/20151011072132/http://www.neontsunami.com/posts/using-lists%28%29-in-laravel-with-custom-attribute-accessors
                'query_builder' => function($obj) { return $obj::get(); },
            ])
            ->add('start_year', 'number', [
                'label' => 'Matriculation year',
            ])
            ->add('end_year', 'number', [
                'label' => 'Graduation year (estimated)',
            ]);
        return $this;
    }
    
    protected function addMembership() {
        $this
            ->add('membership_type', 'static', [
                'tag' => 'div',
                'label' => 'Membership Type',
            ]);
        return $this;
    }
}
