<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holl;
class TimetableController extends Controller
{
    public function timetable()
    {
      // $trainHoll=Holl::select('created_at');
      $holls = Holl::all();
        return view('main.timetable', compact('holls'));
    }
}
