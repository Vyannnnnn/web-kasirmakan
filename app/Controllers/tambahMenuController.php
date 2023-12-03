<?php

namespace App\Controllers;

class tambahMenuController extends BaseController
{
    public function index()
    {
        echo view('admin-dashboard/sideBar');
        echo view('admin-dashboard/tambahMenu');
    }
}
