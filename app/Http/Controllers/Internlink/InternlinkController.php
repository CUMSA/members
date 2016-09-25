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

        return view('internlink.index', compact('form'))->with([
            'validator' => JsValidator::make($this->rules())
        ]);
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

    public function rules()
    {
        return [
            'filter_by' => 'required',
        ];
    }
}
