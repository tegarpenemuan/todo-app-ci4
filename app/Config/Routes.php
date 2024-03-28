<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('api', function ($routes) {
    $routes->get('todos', 'Api\Todos::index');
    $routes->get('todos/status/(:num)', 'Api\Todos::index/$1'); 
	$routes->get('todos/(:num)', 'Api\Todos::show/$1');
});

// Membuat database
$routes->get('create-db', function() {
	$forge = \Config\Database::forge();
	if ($forge->createDatabase('todo_app_ci4'))
	{
		echo 'Database created!';
	}
});

// Menghapus database
$routes->get('drop-db', function() {
	$forge = \Config\Database::forge();
	if ($forge->dropDatabase('todo_app_ci4'))
	{
		echo 'Database deleted!';
	}
});