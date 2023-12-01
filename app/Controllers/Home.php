<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
         echo view('landing-page/v-navbar');
        echo view('landing-page/v-home');
        echo view('landing-page/v-footer');

    }
}
