<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use App\Models\Product;
use App\Models\Service;



class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function viewservices(){
        $services = Service::all();
        return view('home.services', compact('services'));
    }

    public function viewproductos(){
        $products = Product::all();
        return view('home.masproductos', compact('products'));
    }

    public function viewtips(){
        return view('home.tips');
    }

    public function viewperfil(){
        return view('user.crudperfil.index');
    }

}
   
