<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;



class GalleryController extends Controller
{
 public function gallery()
 {
      $galleries = Gallery::all();
     return view('main.gallery', compact('galleries'));
 }
}
