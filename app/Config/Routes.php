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
$routes->post('admin-dashboard/store', 'TransaksiController::store');
$routes->get('admin-dashboard/debug', 'TransaksiController::debug');

