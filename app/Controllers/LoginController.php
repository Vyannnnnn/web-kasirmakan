<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        
        echo view('landing-page/login');
    }
}
