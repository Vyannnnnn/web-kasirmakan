<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'idTransaksi';
    protected $allowedFields = ['idMenu','namaPemesan', 'pesanan','harga', 'noMeja', 'tanggal','total','jumlah','metodePembayaran','keterangan'];
}