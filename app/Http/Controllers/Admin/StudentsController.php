<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    public function index(): View
    {
        return view('admin.students');
    }
}
