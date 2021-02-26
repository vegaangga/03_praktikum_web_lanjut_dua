<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view();
    }

    public function profile(){
        return view();
    }

    public function contact(){
        return view();
    }

}
