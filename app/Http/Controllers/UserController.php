<?php

namespace App\Http\Controllers;

use App\Imports\ImportUser;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function importView(Request $request) {
        return view('importFile');
    }

    public function import (Request $request) {
        Excel::import(new ImportUser, $request->file('file')->store('files'));
        return redirect()->back();
    }
}
