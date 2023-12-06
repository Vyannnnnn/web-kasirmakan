<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;
use App\Models\ProfileModel;

class LaporanController extends BaseController
{

    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }


    public function index()
    {
        $profileModel = new ProfileModel();
        $data['profile'] = $profileModel->find(1);
        $menuModel = new MenuModel();
        $data['menu'] = $menuModel->findAll();

        $content = view('admin-dashboard/sideBar',$data) . view('admin-dashboard/laporan', $data);

        echo $content;

    }

    public function formMenu()
    {
        $profileModel = new ProfileModel();
        $data['profile'] = $profileModel->find(1);
        $menuModel = new MenuModel();
        $data['menu'] = $menuModel->findAll();
        $content = view('admin-dashboard/sideBar',$data) . view('admin-dashboard/tambahMenu', $data);
        echo $content;
    }

    public function tambahMenu()
    {
        try {
            $data = [
                'namaMenu' => $this->request->getPost('namaMenu'),
                'harga' => $this->request->getPost('harga'),
                'stok' => $this->request->getPost('stok'),
                'terjual' => $this->request->getPost('terjual'),
                'deskripsi' => $this->request->getPost('deskripsi'),
            ];
            $this->menuModel->insert($data);

            return redirect()->to('admin-dashboard/laporan');
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}
