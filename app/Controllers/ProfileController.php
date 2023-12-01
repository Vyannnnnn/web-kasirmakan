<?php

namespace App\Controllers;

class ProfileController extends BaseController
{
    public function index()
    {
          echo view('admin-dashboard/sideBar');
          echo view('admin-dashboard/profile');

    }
}
