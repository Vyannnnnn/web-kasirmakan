<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;

class LaporanController extends BaseController
{

    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }
    

    public function index()
    {

        $menuModel = new MenuModel();
        $data['menu'] = $menuModel->findAll();

        return view('admin-dashboard/sideBar');
        return view('admin-dashboard/laporan', $data);
    }

    public function formMenu () {
        return view('admin-dashboard/tambahMenu');
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
