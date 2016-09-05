<?php

namespace App\Http\Controllers\Profile;

use Kris\LaravelFormBuilder\FormBuilderTrait;
use Illuminate\Http\Request;
use App\Member;
use App\Forms\UpdateProfileForm;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use JsValidator;
use Session;

class ProfileController extends Controller
{
    use FormBuilderTrait;

    public function show()
    {
        $member = Auth::user()->member;

        $form = $this->form(UpdateProfileForm::class,[
            'method' => 'POST',
            'url' => route('member.profile.update'),
            'model' => $member,
        ]);

        return view('members.profile.index', compact('form'))->with([
            'validator' => JsValidator::make(Member::rules('profile', false)),
        ]);
    }

    public function save(Request $request)
    {
        $form = $this->form(UpdateProfileForm::class);
        $form->validate(Member::rules('profile', false), [
            'nricformat' => 'NRIC checksum failed. Try checking it again.',
            'dateformat' => 'Date should be a valid date of the format YYYY-MM-DD',
        ]);

        if (!$form->isValid()) {
            return redirect()->back()->with('alert-warning', 'Error in form input!')->withErrors($form->getErrors())->withInput();
        }
        
        $user = Auth::user();
        // get the first member where the crsid matches and update the model
        $person = Auth::user()->member->update($request->all());

        return redirect()->route('member.profile')->with('alert-success', 'Profile updated.');
    }
}

