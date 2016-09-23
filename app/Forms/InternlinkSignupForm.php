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
            ->addInternship()
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
                    'show_mobile_uk' => 'UK Phone',
                    'show_mobile_home' => 'Home Phone',
                    'show_hermes' => 'Hermes Email',
                    'show_email_other' => 'Other Email',
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

    protected function addInternship()
    {
        $this
            ->add('internship', 'collection', [
                'type' => 'form',
                'options' => [
                    'class' => 'App\Forms\InternshipForm'
                ]
            ]);
        return $this;
    }
}
