<?php

namespace App\Http\Controllers\Committee;

use App\Http\Controllers\Controller;
use App\Member;
use App\Forms\HideColumnsForm;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use JsValidator;
use Redirect;

class MemberController extends Controller
{
    use FormBuilderTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.view');
    }

    public function index()
    {
        $form = $this->form(HideColumnsForm::class,[
            'method' => 'POST',
            'url' => route('comm.members.reload'),
        ]);

        // This indentation looks really dubious
        return view('committee/members', [
            'membersJson' => Member::with('college', 'course', 'scholarship')->get()->toJson(),
            ],compact('form'))
                ->with([
                    'validator' => JsValidator::make(HideColumnsForm::rules())
                ]);
    }

    public function reload()
    {
        $form = $this->form(HideColumnsForm::class);
        $form->validate(HideColumnsForm::rules());
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        return $this->index();
    }
}
