<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Member;

class InternlinkSignupForm extends Form
{
    public function buildForm()
    {
        $this
            ->addBio()
            ->add('submit', 'submit');
    }

    protected function addBio()
    {
        $profile_route = route('member.profile');
        $reminder_msg = "Please ensure that you have <a href=$profile_route>updated</a> your contact details accordingly.";
        $this
            ->add('show_home_phone', 'checkbox')
            ->add('show_uk_phone', 'checkbox')
            ->add('show_hermes_email', 'checkbox')
            ->add('show_other_email', 'checkbox')
            ->add('reminder_msg', 'static', [
                'label' => $reminder_msg,
            ])
            ->add('describe_self', 'textarea', [
                'label' => 'Write a short message about yourself!',
                'attr' => ['rows' => 2],

            ]);
        return $this;
    }
}
