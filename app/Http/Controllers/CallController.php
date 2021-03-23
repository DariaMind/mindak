<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallController extends Controller
{
    public function callback()
    {
       $title = 'Заказать обратный звонок';
       return view('main.callback', compact('title'));
    }
    public function getCall(Request $requesr)
    {
        $validated = $requesr->validate([
            'name'    => 'required|min:3|max:255',
            'phone'   => 'required',
            // 'message' => 'required|min:3',
        ]); 

        return back()->with('success', 'Спасибо! Ожидайте');
    }
}
