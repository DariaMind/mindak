<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function timetable()
    {
        return view('main.timetable');
    }
}
