<?php

namespace App\Forms;

use App\Forms\MembersSignupForm;
use Carbon\Carbon;
use App\College;
use App\Course;
use App\Scholarship;

class FreshersSignupForm extends MembersSignupForm
{
    public function buildForm()
    {
        $this
            ->addBio()
            ->addFresherContacts()
            ->addAcademics()
            ->addSg()
            ->addFresher()
            ->add('submit', 'submit');
    }

    protected function addFresherContacts() {
        // Contact details.
        return $this
            ->add('email_other', 'email', ['label' => 'Email'])
            ->add('mobile_home', 'tel', ['label' => 'Mobile']);
        return $this;
    }

    protected function addFresher() {
        // Fresher only.
        $this
            ->add('previous_school', 'text', ['label' => 'Last school attended'])
            ->add('family_join', 'checkbox', [
                'label' => 'Join a CUMSA family?',
                'checked' => true,
            ]);
        return $this;
    }
}
