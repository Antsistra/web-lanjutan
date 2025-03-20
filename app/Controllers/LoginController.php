<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function index()
    {
        //
        return view('login');
    }
    public function forgotPassword()
    {
        //
        return view('forgot-password');
    }
    public function register()
    {
        //
        return view('register');
    }
}
