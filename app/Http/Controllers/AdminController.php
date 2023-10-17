<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function viewusers(){
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

}
