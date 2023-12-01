<?php

namespace App\Controllers;

class RegisterController extends BaseController
{
    public function index()
    {
        echo view('landing-page/register');
    }
}
