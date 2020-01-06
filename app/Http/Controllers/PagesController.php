<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function homepage(){
        return view('pages.home');
    }

    function aboutpage(){
       return view('pages.aboutme');
    }

    function skillpage(){
        return view('pages.skill');
     }

     function contactpage(){
        return view('pages.contact');
     }

     function adminpage(){
        return view('admins.admin');
     }
}
