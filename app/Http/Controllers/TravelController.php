<?php

namespace App\Http\Controllers;
use App\Package;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index(){
        $packages=Package::all();
    
        return view('home', compact('packages'));
    }
}

