<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function viewservices(){
        return view('home.services');
    }
   
}
