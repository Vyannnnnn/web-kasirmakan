<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        
        echo view('admin-dashboard/sideBar');
        echo view('admin-dashboard/dashboard');
    }
    public function sideBar()
    {
        echo view('admin-dashboard/sideBar');
    }
}
