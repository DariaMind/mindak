<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function trainer()
    {
        $title = 'Tренерский состав DANCE';
        $trainers = ['Trainer 1', 'Trainer 2']; // Trainer::all(); 

        return view('team.trainer', compact('title','trainers'));
    }
}
