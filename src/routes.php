<?php


// Route configuration

// Home route
$app->get('/', 'App\Controllers\HomeController:index');

// Redirect using the form..
$app->post('/', function ($request, $response, $args) {
    return $response->withRedirect('/player/'.$request->getParam('playerName'));
})->setName('playerSearch');

// Player routes
$app->get('/player/{playerName}', 'App\Controllers\PlayerController:show');
