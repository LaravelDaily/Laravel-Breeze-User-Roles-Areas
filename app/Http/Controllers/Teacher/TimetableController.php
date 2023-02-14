<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class TimetableController extends Controller
{
    public function index(): View
    {
        return view('teacher.timetable');
    }
}
