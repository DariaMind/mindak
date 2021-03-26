<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holl;
use App\Models\Gallery;


class MainController extends Controller
{
    public function index()
    {
        //$photos=Gallery::orderByDesc('created_at')->paginate(10);
        $gallPhotos=Gallery::orderByDesc('created_at')->paginate(5);
     //  dd($holls); where('category_id', $category->id)->paginate(2);
        return view('main.index', compact('gallPhotos'));
       
    }
   
public function contacts()
{
      $holls = Holl::all();
  
       return view('main.contacts', compact('holls'));
}
  
}
