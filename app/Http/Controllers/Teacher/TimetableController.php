<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

class TimetableController extends Controller
{
    public function index(): View
    {
        return view('teacher.timetable');
    }
}
