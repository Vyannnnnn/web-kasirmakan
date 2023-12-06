<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfileModel;

class ProfileController extends BaseController
{
    // public function debug()
    // {
    //     $profileModel = new ProfileModel();
    //     $data = $profileModel->findAll();

    //     echo '<pre>';
    //     print_r($data);
    //     echo '</pre>';
    // }
    public function index()
    {
        $profileModel = new ProfileModel();
        $datas['profile'] = $profileModel->find(1);
        $data['profile'] = $profileModel->findAll();
        $content = view('admin-dashboard/sideBar',$datas) . view('admin-dashboard/profile', $data);
        echo $content;
    }
    public function tampilUpdate()
    {
        echo view('admin-dashboard/profileUpdate');
    }
    public function updateForm($id = 1)
    {
        
        $profileModel = new ProfileModel();
        $datas['profile'] = $profileModel->find(1);
        $data['profile'] = $profileModel->find($id);

        if (empty($data['profile'])) {
            return redirect()->to('/error');
        }
        $content = view('admin-dashboard/profileUpdate', $data) . view('admin-dashboard/sideBar', $datas);
        echo $content;
    }

    public function update($id=1)
    {
        $profileModel  = new ProfileModel();
        $data = [
            'photo' => $this->request->getFile('photo'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'kota' => $this->request->getPost('kota'),
            'provinsi' => $this->request->getPost('provinsi'),
            'kode_pos' => $this->request->getPost('kode_pos'),
        ];

        $profileModel->update($id, $data);

        return redirect()->to(base_url('admin-dashboard/profile'))->with('success', 'Data user berhasil disimpan.');
    }
}
