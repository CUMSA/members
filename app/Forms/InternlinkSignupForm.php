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
            ->add('contact_options', 'choice', [
                'label' => 'Show my:',
                'choices' => [
                    'show_uk_phone' => 'UK Phone',
                    'show_home_phone' => 'Home Phone',
                    'show_hermes_email' => 'Hermes Email',
                    'show_other_email' => 'Other Email',
                ],
                'multiple' => true,
                'expanded' => true,
            ])
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
