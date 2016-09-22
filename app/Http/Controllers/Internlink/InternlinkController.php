<?php

namespace App\Http\Controllers\Internlink;

use Kris\LaravelFormBuilder\FormBuilderTrait;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Link;
use App\Forms\InternlinkSignupForm;
use JsValidator;

class InternlinkController extends Controller
{
    use FormBuilderTrait;

    public function show()
    {
        return view('internlink.index');
    }

    public function signup()
    {
        $form = $this->form(InternlinkSignupForm::class,[
            'method' => 'POST',
            'url' => route('internlink.signup.save'),
        ]);

        return view('internlink.signup', compact('form'))->with([
            'validator' => JsValidator::make(Link::rules()),
        ]);
    }

    public function save()
    {

    }
}
