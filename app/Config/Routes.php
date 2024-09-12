<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/TokoPakaian' ,'TokoPakaian::index');
$routes->get('TokoPakaian/json', 'TokoPakaian::getTokoPakaianDataJson');
$routes->get('TokoPakaian/simpel-json', 'TokoPakaian::showSimpleJson');
$routes->get('TokoPakaian/data-TokoPakaian', 'TokoPakaian::getTokoPakaianDataJson');
$routes->get('TokoPakaian/hapus/(:num)', 'TokoPakaian::delete/$1');