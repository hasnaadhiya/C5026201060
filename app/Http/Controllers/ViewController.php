<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showEts() {
        return view('ets');
    }
    // function showForm(){
    //     return view('showgreetings');
    // }

    // function resultGreetings(){
    //     return view('tugas');
    // }

    function showDictionary() {
        return view('kamusgaul');
    }

    function resultDictionary(){
        return view('artikata');
    }
}
