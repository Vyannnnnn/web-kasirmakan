<?php

namespace App\Controllers;

class LaporanController extends BaseController
{
    public function index()
    {
        
          echo view('admin-dashboard/sideBar');
          echo view('admin-dashboard/laporan');

    }
}
