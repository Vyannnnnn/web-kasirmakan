<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('admin-dashboard/dashboard', 'DashboardController::index');
$routes->get('admin-dashboard/laporan', 'LaporanController::index');
$routes->get('admin-dashboard/profile', 'ProfileController::index');
$routes->get('landing-page/login', 'LoginController::index');
$routes->get('landing-page/register', 'RegisterController::index');
$routes->get('admin-dashboard/transaksi', 'TransaksiController::index');
$routes->get('admin-dashboard/tambah', 'TransaksiController::tambah');
$routes->get('admin-dashboard/formMenu', 'LaporanController::formMenu');
$routes->post('admin-dashboard/store', 'TransaksiController::store');
$routes->get('admin-dashboard/debug', 'TransaksiController::debug');
$routes->get('admin-dashboard/sideBar', 'DashboardController::sideBar');
$routes->get('admin-dashboard/tambahTransaksi', 'tambahTransaksiController::index');
$routes->post('tambah-menu', 'LaporanController::tambahMenu');
$routes->get('admin-dashboard/tambahMenu', 'tambahMenuController::index');
$routes->get('admin-dashboard/update', 'ProfileController::updateForm');
$routes->post('update', 'ProfileController::update');
$routes->get('payment/pay', 'Payment::index');
