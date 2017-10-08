<?php

// Route configuration

// Home route
$app->get('/', 'App\Controllers\HomeController:index');

// Player routes
$app->get('/player/{playerName}', 'App\Controllers\PlayerController:show');