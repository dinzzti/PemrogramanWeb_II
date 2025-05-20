<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::welcome');

$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::loginPost');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');
$routes->post('/register/process', 'Auth::registerPost');
$routes->get('/logout', 'Auth::logout');

$routes->get('/books', 'Book::index', ['filter' => 'auth']);
$routes->get('/books/create', 'Book::create', ['filter' => 'auth']);
$routes->post('/books/store', 'Book::store', ['filter' => 'auth']);
$routes->get('/books/edit/(:num)', 'Book::edit/$1', ['filter' => 'auth']);
$routes->post('/books/update/(:num)', 'Book::update/$1', ['filter' => 'auth']);
$routes->get('/books/delete/(:num)', 'Book::delete/$1', ['filter' => 'auth']);
