<?php

namespace App\Http\Controllers;

use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\MembersSignupForm;
use App\Member;
use JsValidator;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Mail;

class MemberController extends Controller
{
    use FormBuilderTrait;

    public function signupFresher()
    {
        $form = $this->form(MembersSignupForm::class,[
            'method' => 'POST',
            'url' => route('member.signup.fresher.save'),
        ]);
        $validator = JsValidator::make(Member::rules());
        return view('members.signup.fresher', compact('form'))->with([
            'validator' => $validator,
        ]);
    }

    public function saveFresher(Request $request)
    {
        $form = $this->form(MembersSignupForm::class);
        $form->validate(Member::rules(), ['nricformat' => 'NRIC checksum failed. Try checking it again.']);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $fresher = Member::create($request->all());
        $fresher->membership_type = 'Non-member';
        $fresher->registration_time = Carbon::now();
        $fresher->save();

        Mail::send('emails.signup', ['user' => $fresher], function ($m) use ($fresher) {
            $m->from('database@cumsa.org', 'CUMSA');
            $m->to($fresher->email_other, $fresher->first_name)->subject('[CUMSA] Thanks for signing up!');
        });

        // TODO: indicate directly in family table, e.g. by inserting <member_id, Status: 'Looking for parent'> in family relationships table.

        return redirect()->route('member.signup.fresher')->with('alert-success', 'You have successfully signed up.');
    }
}
