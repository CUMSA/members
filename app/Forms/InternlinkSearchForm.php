<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Internship;

class InternlinkSearchForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('filter_by', 'choice', [
                'choices' => Internship::relatedFields(),
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('keyword', 'text', [
                'label' => 'Search by keyword',
            ])
            ->add('submit', 'submit');
    }
}
