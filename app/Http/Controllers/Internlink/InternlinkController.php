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
        $link_exists = Auth::user()->member->internlink !== null;

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
        if(Auth::user()->member->internlink !== null){
            return redirect()->route('internlink.profile.contact')->with('alert-warning', 'You have already signed up for InternLink!');
        }
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

        Auth::user()->member->internlink->internships()->save(new Internship($request->all()));

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
            ->with('internship', $internship)
            ->with('about_me', $link->describe_self);
    }

    public function viewAll()
    {
        $internships = Internship::all();
        return view('internlink.results')->with('internships', $internships);
    }

    public function myContact()
    {
        $form = $this->form(InternlinkSignupForm::class, [
            'method' => 'POST',
            'url' => route('internlink.profile.contact.update'),
            'model' => Auth::user()->member->internlink,
        ]);

        return $this->profile(Link::rules(), $form);
    }

    public function myInternship($id)
    {
        if(Auth::user()->member->internlink->internships()->find($id) === null){
            return redirect()->route('internlink')->with('alert-warning', 'Permission denied.');
        }
        $form = $this->form(InternshipForm::class, [
            'method' => 'POST',
            'url' => route('internlink.profile.internship.update', $id),
            'model' => Internship::where('id', $id)->get()->first(),
        ]);

        return $this->profile(Internship::rules(), $form);
    }

    public function profile($rules, $form)
    {
        if (Auth::user()->member->internlink === null) {
            return redirect()->route('internlink.signup')->with('signup', 'You have not signed up for InternLink yet!');
        }

        $internships = Auth::user()->member->internlink->internships;
        return view('internlink.profile', compact('form'))->with([
            'validator' => JsValidator::make($rules),
            'internships' => $internships,
        ]);
    }

    public function updateContact(Request $request)
    {
        $member = Auth::user()->member;
        $form = $this->form(InternlinkSignupForm::class);

        $form->validate(Link::rules(), [
            'dateformat' => 'Date should be a valid date of the format YYYY-MM',
        ]);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput()->with('alert-warning', 'Error in form input!');
        }

        $member->internlink->update($request->all());

        return redirect()->route('internlink.profile.contact.update')->with('alert-success', 'Profile updated.');
    }

    public function updateInternship(Request $request, $id)
    {
        $form = $this->form(InternshipForm::class);
        $form->validate(Internship::rules(), [
            'dateformat' => 'Date should be a valid date of the format YYYY-MM',
        ]);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput()->with('alert-warning', 'Error in form input!');
        }

        $internship = Internship::where('id', $id)->get()->first();
        $internship->update($request->all());

        return redirect()->route('internlink.profile.internship.update', $id)->with('alert-success', 'Profile updated.');
    }

    public function rules()
    {
        return [
            'filter_by' => 'required',
        ];
    }
}
