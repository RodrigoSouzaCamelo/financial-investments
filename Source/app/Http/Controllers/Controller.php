<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function homepage()
    {
        if(Auth::check())
            return view('user.dashboard');
        else
            return view('user.login');
    }

    public function cadastar()
    {
        echo "Tela de cadastro";
    }


    /**
     * method to user login VIEW
     * ========================================================================
     */
    public function fazerLogin()
    {
        return view('user.login');
    }


}
