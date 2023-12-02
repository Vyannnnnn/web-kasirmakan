<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class TransaksiController extends BaseController
{
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

        // return view('admin-dashboard/sideBar');
        return view('admin-dashboard/transaksi', $data);
    }
    public function tambah()
    {
        return view('admin-dashboard/tambahTransaksi');
    }
    // public function store()
    // {
    //     $transaksiModel = new TransaksiModel();

    //     $data = [
    //         'namaPemesan'       => $this->request->getPost('namaPemesan'),
    //         'pesanan'           => $this->request->getPost('pesanan'),
    //         'harga'           => $this->request->getPost('harga'),
    //         'noMeja'            => $this->request->getPost('noMeja'),
    //         'tanggal'           => $this->request->getPost('tanggal'),
    //         'total'             => $this->request->getPost('total'),
    //         'jumlah'            => $this->request->getPost('jumlah'),
    //         'metodePembayaran'  => $this->request->getPost('metodePembayaran'),
    //         'keterangan'        => $this->request->getPost('keterangan'),
    //     ];
    //     var_dump($transaksiModel->getErrors());
    //     $transaksiModel->insert($data);
    //     return redirect()->to('/admin-dashboard/transaksi');
    // }
    public function store()
    {
        $transaksiModel = new TransaksiModel();
    
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
            'idMenu'            => $this->request->getPost('idMenu'), // Sesuaikan ini dengan nama inputan yang sesuai
        ];
    
        // Pengecekan apakah idMenu valid
        if ($this->isIdMenuValid($data['idMenu'])) {
            if ($transaksiModel->insert($data)) {
                return redirect()->to('/admin-dashboard/transaksi');
            } else {
                // Jika terdapat kesalahan validasi, tangkap dan tampilkan pesan kesalahan
                $data['validation'] = $transaksiModel->errors();
                return view('admin-dashboard/tambahTransaksi', $data);
            }
        } else {
            // Jika idMenu tidak valid, tampilkan pesan kesalahan
            $data['validation'] = ['idMenu' => 'ID Menu tidak valid.'];
            return view('admin-dashboard/tambahTransaksi', $data);
        }
    }
    
    // Fungsi untuk memeriksa apakah idMenu valid
    private function isIdMenuValid($idMenu)
    {
        // Gantilah logika ini sesuai dengan cara Anda memeriksa keberadaan idMenu di tabel menu
        $menuModel = new TransaksiModel();
        return $menuModel->find($idMenu) !== null;
    }
    

}
