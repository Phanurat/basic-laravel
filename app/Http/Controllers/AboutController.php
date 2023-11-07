<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        return view('about');
    }
    function showData(){
        echo "Hello Laravel 8";
    }
}
