<?php

namespace App\Http\Controllers;

use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\FreshersSignupForm;
use App\Member;
use App\FamilyRequest;
use JsValidator;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Mail;

class MemberController extends Controller
{
    use FormBuilderTrait;

    public function signupFresher()
    {
        $form = $this->form(FreshersSignupForm::class,[
            'method' => 'POST',
            'url' => route('member.signup.fresher.save'),
        ]);
        return view('members.signup.fresher', compact('form'))->with([
            'validator' => JsValidator::make(Member::rules(true)),
        ]);
    }

    public function saveFresher(Request $request)
    {
        $form = $this->form(FreshersSignupForm::class);
        $form->validate(Member::rules(true), ['nricformat' => 'NRIC checksum failed. Try checking it again.']);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $fresher = Member::create($request->all());
        $fresher->membership_type = 'Non-member';
        $fresher->registration_time = Carbon::now();
        $fresher->save();

        if ($request->input('family_join') === '1') {
            // Save CUMSA family preference.
            $family_request = new FamilyRequest();
            $family_request->member()->associate($fresher);
            $family_request->type = 'Child';
            $family_request->save();
        }

        Mail::send('emails.signup', ['user' => $fresher], function ($m) use ($fresher) {
            $m->from('database@cumsa.org', 'CUMSA');
            $m->to($fresher->email_other, $fresher->first_name)->subject('[CUMSA] Thanks for signing up!');
        });

        return redirect()->route('member.signup.fresher')->with('alert-success', 'Thanks ' . $fresher->first_name . '! You have successfully signed up.');
    }
}
