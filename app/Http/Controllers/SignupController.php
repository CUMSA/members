<?php

namespace App\Http\Controllers;

use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\MembersSignupForm;
use App\Forms\FreshersSignupForm;
use App\Member;
use App\FamilyRequest;
use JsValidator;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Mail;

class SignupController extends Controller
{
    use FormBuilderTrait;

    public function show()
    {
        $form = $this->form(MembersSignupForm::class,[
            'method' => 'POST',
            'url' => route('member.signup.save'),
        ]);
        return view('members.signup.index', compact('form'))->with([
            'validator' => JsValidator::make(Member::rules('member', true)),
        ]);
    }

    public function showFresher()
    {
        $form = $this->form(FreshersSignupForm::class,[
            'method' => 'POST',
            'url' => route('member.signup.fresher.save'),
        ]);
        return view('members.signup.fresher', compact('form'))->with([
            'validator' => JsValidator::make(Member::rules('member', true)),
        ]);
    }

    public function save(Request $request)
    {
        $form = $this->form(MembersSignupForm::class);
        $form->validate(Member::rules('member', true), [
            'nricformat' => 'NRIC checksum failed. Try checking it again.',
            'dateformat' => 'Date should be a valid date of the format YYYY-MM-DD',
        ]);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput()->with('alert-warning', 'Error in form input!');
        }

        $member = Member::create($request->all());
        $member->membership_type = $request->membership_type;
        $member->crsid = explode('@', $request->email_hermes, 2)[0];
        $member->registration_time = null;
        $member->save();

        // TODO: record down sources of contact.

        Mail::send('emails.registration', ['user' => $member], function ($m) use ($member) {
            $m->from('database@cumsa.org', 'CUMSA');
            $m->to($member->email_hermes, $member->first_name)->subject('[CUMSA] Thanks for signing up!');
        });

        return redirect()->route('member.signup')->with('alert-success', 'Thanks ' . $member->first_name . '! You have successfully signed up. You should receive a confirmation email shortly at your Cambridge email address.');
    }

    public function saveFresher(Request $request)
    {
        $form = $this->form(FreshersSignupForm::class);
        $form->validate(Member::rules('fresher', true), ['nricformat' => 'NRIC checksum failed. Try checking it again.']);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput()->with('alert-warning', 'Error in form input!');
        }

        $fresher = Member::create($request->all());
        $fresher->membership_type = 'Non-member';
        $fresher->registration_time = null;
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
