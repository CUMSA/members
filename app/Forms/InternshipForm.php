<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Internship;

class InternshipForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('role_name', 'text', ['label' => 'Internship Role'])
            ->add('related_field', 'select', [
                'choices' => Internship::relatedFields(),
                'selected' => 'Select',
                'empty_value' => 'Select'
            ])
            ->add('company_name', 'text', ['label' => 'Company'])
            ->add('location', 'text', ['label' => 'Location'])
            ->add('description', 'textarea', [
                'label' => 'Short description of internship',
                'attr' => ['rows' => 5],
            ])
            ->add('start_date', 'date', ['label' => 'Start Date', 'default_value' => 'YYYY-MM'])
            ->add('end_date', 'date', ['label' => 'End Date', 'default_value' => 'YYYY-MM']);
    }
}
