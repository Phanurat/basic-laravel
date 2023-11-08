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
        //return view('about', compact('address', 'tel', 'email'));

        #Send value With
        return view('about')
            ->with('address', $address)
            ->with('tel', $tel)
            ->with('email', $email)
            ->with('error', '404 Not Found Data')
            ->with('status', 'Save Data is Done');
    }
    function showData(){
        echo "Hello Laravel 8";
    }
}
