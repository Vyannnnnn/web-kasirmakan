<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController
{
    public function index()
    {
        $model = new MenuModel();
        $data['menu'] = $model->findAll();
        return view('menu/index', $data);
    }
}
