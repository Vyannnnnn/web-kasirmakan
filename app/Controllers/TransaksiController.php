<?php

namespace App\Controllers;

class TransaksiController extends BaseController
{
    public function index()
    {
        
        echo view('admin-dashboard/sideBar');
          echo view('admin-dashboard/transaksi');

    }
}
