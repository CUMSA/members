<?php

namespace App\Http\Controllers\Directory;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Member;

class DirectoryController extends Controller
{
    public function show()
    {
        return view('directory/table', [
            'membersJson' => Member::with('college', 'course')->get()->toJson(),
        ]);
    }
}
