<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $houses = House::all();
        //dd($houses);
        return view('home',compact('houses'));
    }
}