<?php

namespace App\Controllers;

use GuzzleHttp\Client;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;

class PlayerController
{
    private $view;
    private $logger;

    /**
     * Player Controller constructor.
     *
     * @param Twig $view
     */
    public function __construct(Twig $view)
    {
        $this->view = $view;
    }

    /**
     * The player show function.
     *
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return void
     */
    public function show(Request $request, Response $response, array $args)
    {
        $client = new Client();

        // $apiResponse = $client->get(getenv('API_URL') . '/player/' . $args['playerName'], [
        //     'headers'        => ['Api-Token' => getenv('API_KEY')],
        // ]);

        // This part is here temporary for debugging purposes..

        $apiResponse = $client->get(getenv('API_URL').'/player/'.$args['playerName']);
        $body = json_decode($apiResponse->getBody(), true);

        foreach ($body['picks'] as &$value) {
            $value['actor'] = str_replace('*', '', $value['actor']);
        }

        // Render index view
        $this->view->render($response, 'player.twig', [
            'player' => $body,
        ]);
    }
}
