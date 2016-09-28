<?php

namespace App\Http\Controllers\Internlink;

use App\Internship;
use Illuminate\Support\Facades\Redirect;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Link;
use App\Forms\InternlinkSignupForm;
use App\Forms\InternlinkSearchForm;
use App\Forms\InternshipForm;
use JsValidator;
use Auth;
use DB;

class InternlinkController extends Controller
{
    use FormBuilderTrait;

    public function show()
    {
        $link_exists = false;
        if(Auth::user()->member->link !== null){
            $link_exists = true;
        }

        $form = $this->form(InternlinkSearchForm::class,[
            'method' => 'POST',
            'url' => route('internlink.search'),
        ]);

        $internship_count = Internship::all()->count();

        return view('internlink.index', compact('form'))->with([
            'validator' => JsValidator::make($this->rules()),
            'internship_count' => $internship_count,
            'link_exists' => $link_exists,
        ]);
    }

    public function search(Request $request)
    {
        $form = $this->form(InternlinkSignupForm::class);
        $form->validate($this->rules());

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $conditions = $request['filter_by'];
        $keyword = $request['keyword'];
        $regex = '%' . $keyword . '%';

        $internships = Internship::whereIn('related_field', $conditions);

        $internships = $internships->when($keyword !== '', function($query) use ($regex) {
            return $query
                ->where('role_name', 'like', $regex)
                ->orWhere('company_name', 'like', $regex)
                ->orWhere('description', 'like', $regex)
                ->orWhere('location', 'like', $regex);
        })->get();

        return view('internlink.results')->with('internships', $internships);
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

    public function save(Request $request)
    {
        $form = $this->form(InternlinkSignupForm::class);
        $form->validate(Link::rules());
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput()->with('alert-warning', 'Error in form input!');
        }

        $link = new Link($request->all());
        $link->member_id = Auth::user()->member->id;
        $link->save();

        return redirect()->route('internlink.signup.internship');
    }

    public function addInternship($alert_success = null)
    {
        $form = $this->form(InternshipForm::class,[
            'method' => 'POST',
            'url' => route('internlink.signup.internship.save'),
        ]);

        return view('internlink.signup', compact('form'))->with([
            'validator' => JsValidator::make(Internship::rules()),
        ]);
    }

    public function saveInternship(Request $request)
    {
        $form = $this->form(InternshipForm::class);
        $form->validate(Internship::rules(), [
            'dateformat' => 'Date should be a valid date of the format YYYY-MM',
        ]);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput()->with('alert-warning', 'Error in form input!');
        }

        $internship = new Internship($request->all());
        $internship->link_id = Auth::user()->member->link->id;
        $internship->save();

        $success_msg = 'Your internship details have been saved! You may submit another internship if you wish.';
        return redirect()->route('internlink.signup.internship')->with('alert-success', $success_msg);
    }

    public function viewInternship($id)
    {
        $internship = Internship::where('id', $id)->get()->first();
        $link = $internship->link;
        $member = $link->member;

        $member_details = ['name' => $member->full_name];

        if($link->show_uk_phone){
            $member_details['mobile_uk'] = $member->mobile_uk;
        }
        if($link->show_home_phone){
            $member_details['mobile_home'] = $member->mobile_home;
        }
        if($link->show_hermes_email){
            $member_details['email_hermes'] = $member->email_hermes;
        }
        if($link->show_other_email){
            $member_details['email_other'] = $member->email_other;
        }

        return view('internlink.internship')
            ->with('member_details', $member_details)
            ->with('internship', $internship);
    }

    public function viewAll()
    {
        $internships = Internship::all();
        return view('internlink.results')->with('internships', $internships);
    }

    public function rules()
    {
        return [
            'filter_by' => 'required',
        ];
    }
}
