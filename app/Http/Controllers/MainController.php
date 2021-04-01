<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holl;
use App\Models\Gallery;


class MainController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderByDesc('created_at')->paginate(5);
      
       // $gallPhotos=Gallery::orderByDesc('created_at')->paginate(5);
     //  dd($holls); 
        return view('main.index', compact('galleries'));
       
    }
   
public function contacts()
{
      $holls = Holl::all();
  
       return view('main.contacts', compact('holls'));
}
  
}
