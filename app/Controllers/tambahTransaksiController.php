<?php

namespace App\Controllers;

class tambahTransaksiController extends BaseController
{
    public function index()
    {
        echo view('admin-dashboard/sideBar');
        echo view('admin-dashboard/tambahTransaksi');
    }
}
