<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        #Get value
        $address = "123 Bangkok, thailand";
        $tel = "0956595973";
        $email = "paunavt5@gmail.com";
        /*return view('about', ['address'=>$address, 'tel'=>$tel, 'email'=>$email]);*/

        #Send value is functions by Compact
        return view('about', compact('address', 'tel', 'email'));
    }
    function showData(){
        echo "Hello Laravel 8";
    }
}
