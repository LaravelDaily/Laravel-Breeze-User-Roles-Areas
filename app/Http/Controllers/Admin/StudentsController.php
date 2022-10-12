<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    public function index()
    {
        return view('admin.students');
    }
}
