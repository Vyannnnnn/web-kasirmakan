<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\TransaksiModel;
use App\Models\ProfileModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $profileModel = new ProfileModel();
        $data['profile'] = $profileModel->find(1);

        // Menampilkan daftar menu
        $model = new MenuModel();
        $data['menu'] = $model->findAll();

        $transaksiModel = new TransaksiModel();
        $totalTransaksi = $transaksiModel->selectSum('total')->get()->getRowArray();
        $countAllTransaksi = $transaksiModel->countAll(); // Menghitung jumlah total data transaksi
        $data['countAllTransaksi'] = $countAllTransaksi;
        $data['totalTransaksi'] = $totalTransaksi['total'];

        $content = view('admin-dashboard/sideBar', $data) . view('admin-dashboard/dashboard', $data);

        echo $content;
    }
    public function sideBar()
    {
        $profileModel = new ProfileModel();
        $data['profile'] = $profileModel->find(1);
        return view('admin-dashboard/sideBar', $data);
        // var_dump($data['profile']);
    }
}
