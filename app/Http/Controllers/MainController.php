<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holl;
use App\Models\Gallery;
use App\Models\Trainer;

class MainController extends Controller
{
    public function index()
    { 
        $trainers = Trainer::orderByDesc('created_at')->paginate(4);
        // $galleries = Gallery::orderByDesc('created_at')->paginate(5);,'galleries'
        return view('main.index', compact('trainers'));       
    }
   
public function contacts()
{
      $holls = Holl::all();
  
       return view('main.contacts', compact('holls'));
}


  
}
