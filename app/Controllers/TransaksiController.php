<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;
use App\Models\ProfileModel;

class TransaksiController extends BaseController
{
    protected $transaksiModel;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
    }

    //  public function debug()
    // {
    //     $transaksiModel = new TransaksiModel();
    //     $data = $transaksiModel->findAll();

    //     echo '<pre>';
    //     print_r($data);
    //     echo '</pre>';
    // }

    public function index()
    {
        $profileModel = new ProfileModel();
        $data['profile'] = $profileModel->find(1);
        $transaksiModel = new TransaksiModel();
        $data['transaksi'] = $transaksiModel->findAll();

        $content = view('admin-dashboard/transaksi', $data) . view('admin-dashboard/sideBar', $data);
        echo $content;
    }

    public function tambah()
    {
        $profileModel = new ProfileModel();
        $data['profile'] = $profileModel->find(1);
        $content = view('admin-dashboard/tambahTransaksi', $data) . view('admin-dashboard/sideBar', $data);
        echo $content;
    }


    public function store()
    {

        $data = [
            'namaPemesan'       => $this->request->getPost('namaPemesan'),
            'pesanan'           => $this->request->getPost('pesanan'),
            'harga'             => $this->request->getPost('harga'),
            'noMeja'            => $this->request->getPost('noMeja'),
            'tanggal'           => $this->request->getPost('tanggal'),
            'total'             => $this->request->getPost('total'),
            'jumlah'            => $this->request->getPost('jumlah'),
            'metodePembayaran'  => $this->request->getPost('metodePembayaran'),
            'keterangan'        => $this->request->getPost('keterangan'),
        ];
        $this->transaksiModel->insert($data);

        return redirect()->to('admin-dashboard/transaksi')->with('success', 'Data transaksi berhasil ditambahkan!');
    }
}
