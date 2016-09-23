<?php

namespace App\Http\Controllers\Internlink;

use Kris\LaravelFormBuilder\FormBuilderTrait;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Link;
use App\Forms\InternlinkSignupForm;
use JsValidator;
use Auth;

class InternlinkController extends Controller
{
    use FormBuilderTrait;

    public function show()
    {
        return view('internlink.index');
    }

    public function signup()
    {
        $member = Auth::user()->member;

        $form = $this->form(InternlinkSignupForm::class,[
            'method' => 'POST',
            'model' => $member,
            'url' => route('internlink.signup.save'),
        ]);

        return view('internlink.signup', compact('form'))->with([
            'validator' => JsValidator::make(Link::rules()),
        ]);
    }

    public function save(Request $request)
    {
        $form = $this->form(InternlinkSignupForm::class);
        $form->validate(Link::rules(), [
            'dateformat' => 'Date should be a valid date of the format YYYY-MM',
        ]);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput()->with('alert-warning', 'Error in form input!');
        }
    }
}
