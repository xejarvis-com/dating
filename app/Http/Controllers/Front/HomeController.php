<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Front Page

    public function home()
    {

        return view('frontend.index');
    }


    // Match Making
    public function match()
    {
        return view('frontend.matchmaking');
    }
    
    
    // email verify
    
    public function verify()
    {
        return view('auth.verify-email');
    }
}
