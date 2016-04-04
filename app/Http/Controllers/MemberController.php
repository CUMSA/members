<?php

namespace App\Http\Controllers;

use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\MembersSignupForm;
use App\Member;
use JsValidator;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    use FormBuilderTrait;

    public function signupFresher()
    {
        $form = $this->form(MembersSignupForm::class,[
            'method' => 'POST',
            'url' => route('member.signup.fresher.save'),
        ]);
        $validator = JsValidator::make($form->getRules());
        return view('members.signup.fresher', compact('form'))->with([
            'validator' => $validator,
        ]);
    }

    public function saveFresher(Request $request)
    {
        $form = $this->form(MembersSignupForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $fresher = Member::create($request->all());
        $fresher->membership_type = 'Non-member';
        $fresher->save();

        // TODO: send a notification email to the fresher.
        // TODO: indicate directly in family table.

        return redirect()->route('member.signup.fresher')->with('alert-success', 'You have successfully signed up.');
    }
}
