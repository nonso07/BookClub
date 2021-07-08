<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class appNavController extends Controller
{
    //
    public function Home(){

        return view('index');
    }

    public function about(){
        return view('aboutUs');
    }
}
