<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/app.css">
  <title>Home</title>
  <style>
    body {
      background-color: white;
    }
  </style>
</head>

<body>

  <!-- hero section -->
  <section class=" dark:bg-gray-900 mt-32 mb-10">
    <div class="container">
      <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h1 class="text-4xl font-extrabold  tracking-wider leading-relaxed text-[#2E8CAD] md:text-5xl lg:text-6xl dark:text-white mb-8"><span class="block  mb-2">AYO CATAT</span>TRANSAKSI ANDA<span class="block mt-2">BERSAMA KAMI</span></h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Transaksi di warung makanmu akan lebih mudah untuk dikelola dan di atur <span class="">dengan bantuan dari website kami .</span></p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4"></div>
      </div>
    </div>
  </section>

  <!-- hero section end -->

  <!-- card layanan -->
  <section class="my-card mb-10 bg-[#EAEAEA] py-20  ">
    <div class="container">
      <h1 class="text-center text-3xl font-bold text-[#2E8CAD] pt-8 mb-14">Layanan</h1>
      <div class="flex justify-center gap-4">
        <div class="max-w-[320px] h-[370px] p-4 bg-[#AFAFAF] border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <img class="rounded-md mb-3" src="<?= base_url('/img/service1.jpg')?>" alt="service 1" width="290" height="150">
          <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Catat uang masuk</h5>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Mencatat setiap menu yang dibeli oleh customer agar lebih mudah untuk membuat laporan laba dan ruginya</p>
        </div>
        <div class="max-w-[320px] h-[370px] p-4 bg-[#AFAFAF] border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <img class="rounded-md mb-3" src="<?= base_url('/img/service2.jpg')?>" width="290" height="150" alt="service 2">
          <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Laporan keuangan bulanan</h5>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Mencatat setiap menu yang dibeli oleh customer agar lebih mudah untuk membuat laporan laba dan ruginya</p>
        </div>
      </div>
      <div class="flex justify-center pb-8 mt-10">
        <a href="#card-harga" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-full bg-gray-500 hover:bg-gray-700 focus:ring-2 focus:ring-primary dark:focus:ring-blue-900">
          Coba Gratis
          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
          </svg>
        </a>
      </div>
    </div>
  </section>
  <!-- card layanan end -->

  <!-- tentang kami -->

  <section class="py-20 mb-10">
    <div class="container">
      <div class="flex justify-center gap-16">
      
          <img class=" lg:w-[600px] mb-3" src="<?= base_url('/img/about-us-no-bg.png')?>"  alt="about-us">
        
        <div class="max-w-sm dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-center">
          <h5 class=" mb-5 font-bold tracking-tight text-primary text-3xl dark:text-white">Tentang Kami</h5>
          <p class="mb-3 font-normal text-left text-gray-700 dark:text-gray-400 ">
            Kami mengutamakan kepuasan pelanggan, efisiensi, dan keandalan sebagai nilai-nilai inti perusahaan kami. Keunggulan produk dan layanan kami terletak pada kecanggihan teknologi, kemudahan penggunaan, dan kemampuan untuk
            disesuaikan dengan kebutuhan unik Anda. Dari sistem kasir yang intuitif hingga fitur pelaporan yang canggih, kami menawarkan solusi yang memungkinkan Anda mengelola bisnis Anda dengan lebih efisien dan meningkatkan
            produktivitas.
          </p>
        </div>
        
      </div>
    </div>
  </section>
  <!-- tentang kami end -->

  <!-- section card plan -->

  <section class="py-20 bg-[#EAEAEA]" id="card-harga">
    <div class="container flex flex-wrap justify-center">

      <!-- card free -->
      <div class="max-w-sm mr-7 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Free Plan</h5>
        <div class="flex items-baseline text-gray-900 dark:text-white">
          <span class="text-xl font-semibold">Rp</span>
          <span class="text-2xl font-extrabold tracking-tight">0,00</span>
          <span class="ms-1 text-xl font-normal text-gray-500 dark:text-gray-400">/hanya 3 hari</span>
        </div>
        <ul role="list" class="space-y-5 my-7">
          <li class="flex items-center">
            <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Pembayaran via QRIS</span>
          </li>
          <li class="flex">
            <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Mengelola menu makanan & minuman</span>
          </li>
          <li class="flex line-through decoration-gray-500">
          <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Mengelola urutan antrian</span>
          </li>
          <li class="flex line-through decoration-gray-500">
            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Mengelola meja</span>
          </li>
          <li class="flex line-through decoration-gray-500">
            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Laporan penjualan perbulan</span>
          </li>
          <li class="flex line-through decoration-gray-500">
            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Bisa diakses lebih dari 1 kasir</span>
          </li>
          <li class="flex line-through decoration-gray-500">
            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Gratis akses 20 hari</span>
          </li>
          
        </ul>
        <button type="button" class="text-white bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Pilih</button>
      </div>
      <!-- card free end -->

      <!-- card basic -->
      <div class="max-w-sm mr-7 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Basic Plan</h5>
        <div class="flex items-baseline text-gray-900 dark:text-white">
          <span class="text-xl font-semibold">Rp</span>
          <span class="text-2xl font-extrabold tracking-tight">280000,00</span>
          <span class="ms-1 text-xl font-normal text-gray-500 dark:text-gray-400">/bulan</span>
        </div>
        <ul role="list" class="space-y-5 my-7">
          <li class="flex items-center">
            <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Pembayaran via QRIS</span>
          </li>
          <li class="flex">
            <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Mengelola meja</span>
          </li>
          <li class="flex">
            <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Mengelola urutan antrian</span>
          </li>
          <li class="flex">
          <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Mengelola menu makanan & minuman</span>
          </li>
          <li class="flex">
          <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Laporan penjualan perbulan</span>
          </li>
          
          <li class="flex line-through decoration-gray-500">
            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Bisa diakses lebih dari 1 kasir</span>
          </li>
          <li class="flex line-through decoration-gray-500">
            <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Gratis akses 20 hari</span>
          </li>
          
        </ul>
        <button type="button" class="text-white bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Pilih</button>
      </div>
      <!-- card basic end -->

      <!-- card premium -->
      <div class="max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Premium Plan</h5>
        <div class="flex items-baseline text-gray-900 dark:text-white">
          <span class="text-xl font-semibold">Rp</span>
          <span class="text-2xl font-extrabold tracking-tight">3300000,00</span>
          <span class="ms-1 text-xl font-normal text-gray-500 dark:text-gray-400">/tahun</span>
        </div>
        <ul role="list" class="space-y-5 my-7">
          <li class="flex items-center">
            <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Pembayaran via QRIS</span>
          </li>
          <li class="flex">
            <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Mengelola meja</span>
          </li>
          <li class="flex">
            <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Mengelola urutan antrian</span>
          </li>
          <li class="flex">
            <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Mengelola menu makanan & minuman</span>
          </li>
          <li class="flex">
          <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Laporan penjualan perbulan</span>
          </li>
          <li class="flex">
            <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Bisa diakses lebih dari 1 kasir</span>
          </li>
          <li class="flex">
            <svg class="flex-shrink-0 w-4 h-4 text-[#F9A72A] dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Gratis akses 20 hari</span>
          </li>
          
        </ul>
        <button type="button" class="text-white bg-primary hover:bg-opacity-90 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Pilih</button>
      </div>
      <!-- card premium end -->

    </div>
  </section>
  <!-- section card plan end -->

  <!-- hubungi kami -->
  <section class="py-20">
    <div class="container">


      <div class="isolate bg-white px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Hubungi Kami</h2>
          <p class="mt-2 text-lg leading-8 text-gray-600">Kami disini untukmu ! Apa yang bisa kami bantu?</p>
        </div>
        <form action="#" method="POST" class="mx-auto max-w-xl mt-10 ">
          <div class="grid grid-cols-1 gap-x-8 gap-y-6 ">
            <div>

              <div class="sm:col-span-2">
                <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Nama</label>
                <div class="mt-2.5">
                  <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                <div class="mt-2.5">
                  <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Handphone</label>
                <input type="text" name="phone-number" id="phone-number" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
              </div>
              <div class="sm:col-span-2">
                <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Pesan</label>
                <div class="mt-2.5">
                  <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"></textarea>
                </div>
              </div>
            </div>
            <div class="mt-9">
              <button type="submit" class="block w-full rounded-md bg-primary px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-opacity-90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Kirim</button>
            </div>
        </form>
      </div>
    </div>
  </section>

  <!-- hubungi kami end -->
  

  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>