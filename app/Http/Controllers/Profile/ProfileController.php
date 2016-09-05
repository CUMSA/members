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
        $user = Auth::user();
        $member = $user->getModel();

        $form = $this->form(UpdateProfileForm::class,[
            'method' => 'POST',
            'url' => route('member.profile.update'),
            'model' => $member,
        ]);
        return view('members.profile.index', compact('form'))->with([
            'validator' => JsValidator::make($this->profileRules(true)),
        ]);
    }

    public function save(Request $request)
    {
        $form = $this->form(UpdateProfileForm::class);
        $form->validate($this->profileRules(), [
            'nricformat' => 'NRIC checksum failed. Try checking it again.',
            'dateformat' => 'Date should be a valid date of the format YYYY-MM-DD',
        ]);
        if (!$form->isValid()) {
            return redirect()->back()->with('alert-warning', 'Error in form input!')->withErrors($form->getErrors())->withInput();
        }
        
        $user = Auth::user();
        // get the first member where the crsid matches and update the model
        $person = Member::where('crsid', $user->crsid)
            ->first()
            ->update($request->all());
        return redirect()->route('member.profile')->with('alert-success', 'Profile updated.');
    }
    
    public function profileRules(){
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'sometimes|required|dateformat:Y-m-d',
            'email_other' => 'required|email',
            'email_hermes' => 'sometimes|required|email|regex:/^[\w\W]*cam.ac.uk$/',
            'mobile_uk' => 'sometimes|required',
            'address_uk' => 'sometimes|required',
            'start_year' => 'required|integer|digits:4',
            'end_year' => 'required|integer|digits:4',
            'nationality' => 'required',
            'nric' => ['regex:/^[STFG]\d{7}[A-Z]$/', 'nricformat'],
            'college_id' => 'required',
            'course_id' => 'required',
            'scholarship_id' => 'required',
        ];
        return $rules;
    }
}
