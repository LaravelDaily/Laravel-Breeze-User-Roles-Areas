<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;

class TimetableController extends Controller
{
    public function index()
    {
        return view('teacher.timetable');
    }
}
