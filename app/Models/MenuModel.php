<?php
 namespace App\Models;
 use CodeIgniter\Model;

 class MenuModel extends Model
 {

    protected $table = 'menu';
    protected $primaryKey = 'idMenu';
    protected $allowedFields = ['idMenu','namaMenu','harga','stok','deskripsi','terjual'];
 
}