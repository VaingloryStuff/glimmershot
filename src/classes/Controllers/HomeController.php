<?php

namespace App\Controllers;

use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;

class HomeController
{
    private $view;
    private $logger;

    /**
     * Home Controller constructor.
     *
     * @param Twig            $view
     * @param LoggerInterface $logger
     */
    public function __construct(Twig $view, LoggerInterface $logger)
    {
        $this->view = $view;
        $this->logger = $logger;
    }

    /**
     * The index function.
     *
     * Get stuff, do stuff, like in Laravel.
     *
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return void
     */
    public function index(Request $request, Response $response, array $args)
    {
        // Sample log message
        $this->logger->info("Glimmershot '/' route");

        // Render index view
        $this->view->render($response, 'home.twig');
    }
}
