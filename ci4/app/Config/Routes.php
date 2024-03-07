<?php


use App\Controllers\News; // Add this line
use App\Controllers\Pages;
use App\Controllers\Guests;

$routes->get('news', [News::class, 'index']);           // Add this line
$routes->get('news/new', [News::class, 'new']); // Add this line
$routes->post('news', [News::class, 'create']); // Add this line
$routes->get('news/(:segment)', [News::class, 'show']); // Add this line

$routes->get('guests', [Guests::class, 'index']);           // Add this line
$routes->get('guests/new', [Guests::class, 'new']); // Add this line
$routes->post('guests', [Guests::class, 'create']); // Add this line
$routes->get('guests/(:segment)', [Guests::class, 'show']); // Add this line


$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);