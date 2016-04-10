<?php

namespace App\Http\Controllers\Committee;

use App\Http\Controllers\Controller;
use App\Member;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.view');
    }

    public function index() {
        return view('committee/members', [
            'membersJson' => Member::with('college', 'course', 'scholarship')->get()->toJson(),
        ]);
    }
}
