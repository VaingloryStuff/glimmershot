<?php

namespace App\Controllers;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class PlayerController
{
    private $view;
    private $logger;

    /**
     * Player Controller constructor.
     *
     * @param Twig $view
     * @param LoggerInterface $logger
     */
    public function __construct(Twig $view, LoggerInterface $logger) {
        $this->view = $view;
        $this->logger = $logger;
    }

    /**
     * The player show function.
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return void
     */
    public function show(Request $request, Response $response, array $args)
    {
        // Sample log message
        $this->logger->info("Glimmershot '/player' route");

        $data = ['playerName' => $args['playerName']];

        // Render index view
        $this->view->render($response, 'player.twig', $data);
    }
}
