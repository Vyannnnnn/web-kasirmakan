<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;

class TransaksiController extends BaseController
{
    protected $transaksiModel;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
    }

     public function debug()
    {
        $transaksiModel = new TransaksiModel();
        $data = $transaksiModel->findAll();

        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    public function index()
    {
        $transaksiModel = new TransaksiModel();
        $data['transaksi'] = $transaksiModel->findAll();

        return view('admin-dashboard/transaksi', $data);
        // return view('admin-dashboard/sideBar');
    }

    public function tambah()
    {
        return view('admin-dashboard/tambahTransaksi');
        

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
