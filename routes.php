<?php

// Create Router instance
$router = new Router();
/** General Pages */
$router->get('/', 'PagesController@home');

$router->get('/about', 'PagesController@about');

$router->get('/contact', 'PagesController@contact');
$router->post('/contact', 'PagesController@contactForm');

/*Model-based pages */
/* Articles */
$router->get('/movies', '');
$router->get('/add-article','ArticlesController@add');
$router->post('/add-article', 'ArticlesController@dealAdd');

$router->get('/movies', 'MoviesController@index');
$router->get('/movie/{id}', 'MoviesController@show');

// $router->get('/movies',         'MoviesController@index');      // SELECT all : Tous les éléments
// $router->get('/movies/add',     'MoviesController@add');        // CREATE one : Formulaire d'un élément
// $router->post('/movies/save',   'MoviesController@save');       // CREATE one (action) : Action du formulaire d'un élément
// $router->get('/movies/(\d+)',   'MoviesController@read');       // SELECT one : Affichage d'un élément

// Run it!
$router->run();