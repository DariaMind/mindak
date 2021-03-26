<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\callback;

class CallController extends Controller
{
    public function callback()
    {
       return view('main.callbacks');
    }
    public function getCallback(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2|max:30',
            'holl' => 'required|min:1|max:255',
            'phone' => 'required|min:7|max:255',

        ]);
       //dd($request->all());
       return redirect('/callbacks')->with('success', 'Спасибо! Ожидайте звонок.');
    }
}
