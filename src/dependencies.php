<?php

// DIC configuration

$container = $app->getContainer();

// View renderer (Twig)
$container['view'] = function ($c) {
    $settings = $c->get('settings');
    $view = new Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);

    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
    $view->addExtension(new Twig_Extension_Debug());

    return $view;
};

// Monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));

    return $logger;
};

/*
 * This is a factory that instantiates the controller with the dependencies.
 * This allows us to leverage the container for dependency injection
 * and so we can inject specific dependencies into the controller.
 */
$container[App\Controllers\HomeController::class] = function ($c) {
    return new App\Controllers\HomeController($c->get('view'), $c->get('logger'));
};

$container[App\Controllers\PlayerController::class] = function ($c) {
    return new App\Controllers\PlayerController($c->get('view'), $c->get('logger'));
};
