<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
    return view('home');
    }
    function trains(){
        $trains = Train::limit(50)->get();

        return view('trains', compact('trains'));
    }
}
