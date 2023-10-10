<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;



class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function viewservices(){
        return view('home.services');
    }

    public function viewproductos(){
        $products = Product::all();
    return view('home.masproductos', compact('products'));
    }

    public function viewtips(){
        return view('home.tips');
    }
   
}
