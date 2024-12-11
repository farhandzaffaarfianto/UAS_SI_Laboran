<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'DashboardController::index');

$routes->get('/kriteria', 'KriteriaController::index');
$routes->get('/kriteria/create', 'KriteriaController::create');
$routes->post('/kriteria/store', 'KriteriaController::store');
$routes->get('/kriteria/edit/(:num)', 'KriteriaController::edit/$1');
$routes->post('/kriteria/update/(:num)', 'KriteriaController::update/$1');
$routes->get('/kriteria/delete/(:num)', 'KriteriaController::delete/$1');

$routes->get('/alternatif', 'AlternatifController::index');
$routes->get('/alternatif/create', 'AlternatifController::create');
$routes->post('/alternatif/store', 'AlternatifController::store');
$routes->get('/alternatif/edit/(:num)', 'AlternatifController::edit/$1');
$routes->post('/alternatif/update/(:num)', 'AlternatifController::update/$1');
$routes->get('/alternatif/delete/(:num)', 'AlternatifController::delete/$1');

$routes->get('/penilaian', 'PenilaianController::index');
$routes->get('/penilaian/create', 'PenilaianController::create');
$routes->post('/penilaian/store', 'PenilaianController::store');
$routes->get('/penilaian/edit/(:num)', 'PenilaianController::edit/$1');
$routes->post('/penilaian/update/(:num)', 'PenilaianController::update/$1');
$routes->get('/penilaian/delete/(:num)', 'PenilaianController::delete/$1');

$routes->get('/matriks', 'MatriksController::index');

$routes->get('/normalisasi', 'NormalisasiController::index');

$routes->get('/optimasi', 'OptimasiController::index');

$routes->get('yi', 'YiController::index');

$routes->get('/ranking', 'RankingController::index');
