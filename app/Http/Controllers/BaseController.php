<?php

namespace App\Http\Controllers;

use App\Services\GetPlayerService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * Player instance.
     *
     * @var GetPlayerService
     */
    protected $player;

    /**
     * BaseController constructor.
     *
     * @param GetPlayerService $player
     */
    public function __construct(GetPlayerService $player)
    {
        $this->getPlayerService = $player;
    }

    /**
     * @param $region
     * @param $player_name
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($region, $player_name)
    {
        $player = $this->getPlayerService->search($region, $player_name);

        $ranked_chart = app()->chartjs
        ->name('Ranked')
        ->type('doughnut')
        ->size(['width' => 350, 'height' => 200])
        ->labels(['Wins', 'Losses'])
        ->datasets([
            [
                'backgroundColor'      => ['#23d160', '#ff3860'],
                'hoverBackgroundColor' => ['#23d160', '#ff3860'],
                'data'                 => [
                    $player['currentSeries']['1']['wins'],
                    $player['currentSeries']['1']['played'] - $player['currentSeries']['1']['wins'],
                    ],
            ],
        ])
        ->options([]);

        $casual_chart = app()->chartjs
            ->name('Casual')
            ->type('doughnut')
            ->size(['width' => 350, 'height' => 200])
            ->labels(['Wins', 'Losses'])
            ->datasets([
                [
                    'backgroundColor'      => ['#23d160', '#ff3860'],
                    'hoverBackgroundColor' => ['#23d160', '#ff3860'],
                    'data'                 => [
                        $player['currentSeries']['0']['wins'],
                        $player['currentSeries']['0']['played'] - $player['currentSeries']['0']['wins'],
                    ],
                ],
            ])
            ->options([]);

        return view('pages.player', compact('player', 'ranked_chart', 'casual_chart'));
    }

    /**
     * Perform a search from the homepage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function search(Request $request)
    {
        return redirect()->route('player', [
            'region'      => $request->region,
            'player_name' => $request->player_name,
        ]);
    }
}
