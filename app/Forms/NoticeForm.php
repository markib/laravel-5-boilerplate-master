<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class NoticeForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('notice_title', 'text')
            ->add('notice_name', 'textarea')
            ->add('publish', 'checkbox')
            ->add('submit', 'submit', ['attr'=>['class' => 'btn btn-primary']]);
    }
}
