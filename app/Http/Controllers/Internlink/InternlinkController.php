<?php

namespace App\Http\Controllers\Internlink;

use App\Internship;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Link;
use App\Forms\InternlinkSignupForm;
use App\Forms\InternlinkSearchForm;
use JsValidator;
use Auth;

class InternlinkController extends Controller
{
    use FormBuilderTrait;

    public function show()
    {
        $form = $this->form(InternlinkSearchForm::class,[
            'method' => 'POST',
            'url' => route('internlink.search'),
        ]);

        $internship_count = Internship::all()->count();

        return view('internlink.index', compact('form'))->with([
            'validator' => JsValidator::make($this->rules())
        ])->with('internship_count', $internship_count);
    }

    public function search(Request $request)
    {
        $form = $this->form(InternlinkSignupForm::class);
        $form->validate($this->rules());

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $internships = collect();
        $conditions = $request['filter_by'];
        foreach ($conditions as $condition)
        {
            $internships = $internships->merge(Internship::where('related_field', $condition)->get());
        }

        if($internships->count() == 0)
        {
            return view('internlink.empty');
        }

        return view('internlink.results')->with('internships', $internships);
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

    public function viewInternship($id)
    {
        $internship = Internship::where('id', $id)->get()->first();
        $link = $internship->link;
        $member = $link->member;

        $member_details = ['name' => $member->full_name];

        if($link->show_uk_phone == 1){
            $member_details = array_merge($member_details, ['mobile_uk' => $member->mobile_uk]);
        }
        if($link->show_home_phone == 1){
            $member_details = array_merge($member_details, ['mobile_home' => $member->mobile_home]);
        }
        if($link->show_hermes_email){
            $member_details = array_merge($member_details, ['email_hermes' => $member->email_hermes]);
        }
        if($link->show_other_email){
            $member_details = array_merge($member_details, ['email_other' => $member->email_other]);
        }

        return view('internlink.internship')
            ->with('member_details', $member_details)
            ->with('internship', $internship);
    }

    public function rules()
    {
        return [
            'filter_by' => 'required',
        ];
    }
}
