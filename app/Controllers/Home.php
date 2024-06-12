<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\Email\Email;

class Home extends BaseController
{
    public function index()
    {
         echo view('landing-page/v-navbar');
        echo view('landing-page/v-home');
        echo view('landing-page/v-footer');

    }
    public function sendEmail()
    {
        if ($this->request->getMethod(true) === 'post') {
            $email = new Email();

            $nama = $this->request->getPost('company');
            $emailAddress = $this->request->getPost('email');
            $nomorHp = $this->request->getPost('phone-number');
            $pesan = $this->request->getPost('message');

            // Konfigurasi pengiriman email
            $config = [
                'protocol'  => 'smtp',
                'SMTPHost'  => 'smtp.example.com', // Sesuaikan dengan host SMTP Anda
                'SMTPUser'  => 'your@example.com', // Sesuaikan dengan username SMTP Anda
                'SMTPPass'  => 'your_password', // Sesuaikan dengan password SMTP Anda
                'SMTPPort'  => 587,
                'mailType'  => 'html',
                'charset'   => 'utf-8',
                'newline'   => "\r\n"
            ];

            $email->initialize($config);

            $email->setFrom('your@example.com', 'Your Name'); // Sesuaikan dengan alamat email dan nama Anda
            $email->setTo('recipient@example.com'); // Sesuaikan dengan alamat email penerima
            $email->setSubject('Pesan dari Formulir Kontak');

            $email->setMessage("Nama: $nama<br>Email: $emailAddress<br>Nomor Handphone: $nomorHp<br>Pesan: $pesan");

            if ($email->send()) {
                echo 'Email berhasil dikirim';
            } else {
                echo 'Email gagal dikirim';
            }
        }
    }
}
