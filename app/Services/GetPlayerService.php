<?php

namespace App\Services;

use GuzzleHttp\Client;

class GetPlayerService
{
    public function search($region, $player_name)
    {
        $client = new Client();

        // $request = $client->request('GET', "https://vainsocial.com/andi/api/player/$player_name");
        $request = '{"id":18142,"shard_id":"eu","api_id":"a84deea2-c360-11e4-ad12-06eb725f8a76","name":"L3oN","last_match_created_date":"2017-09-02 14:10:43","last_update":"2017-09-03 21:52:44","created_at":"2017-09-02 14:10:43","level":30,"xp":175450,"lifetime_gold":10526.62,"skill_tier":29,"trueskill_mu":5239.0781323751,"trueskill_sigma":205.32051871446,"elo":null,"currentSeries":[{"game_mode_id":2,"played":6,"wins":4},{"game_mode_id":3,"played":1492,"wins":1276}],"stats":{"kills":"11347","deaths":"4739","assists":"10610","kill_participation":0.80935807076102},"picks":[{"actor":"*Vox*","hero_pick":217},{"actor":"*Lance*","hero_pick":168},{"actor":"*Koshka*","hero_pick":128},{"actor":"*Kestrel*","hero_pick":120}],"total_played":0,"best_hero":[{"name":"Kestrel","played":120,"wins":"99","hero_impact_score":0.6567396},{"name":"Vox","played":217,"wins":"186","hero_impact_score":0.4117842},{"name":"Idris","played":32,"wins":"26","hero_impact_score":0.3439378},{"name":"Koshka","played":128,"wins":"112","hero_impact_score":0.335415},{"name":"Lance","played":168,"wins":"147","hero_impact_score":0.2863836},{"name":"Catherine","played":14,"wins":"14","hero_impact_score":0.233915},{"name":"Krul","played":44,"wins":"37","hero_impact_score":0.18473},{"name":"Celeste","played":105,"wins":"88","hero_impact_score":0.1618456},{"name":"Skaarf","played":17,"wins":"13","hero_impact_score":0.1179296},{"name":"Baron","played":29,"wins":"25","hero_impact_score":0.103692},{"name":"Reim","played":38,"wins":"36","hero_impact_score":0.099325},{"name":"Grace","played":10,"wins":"6","hero_impact_score":0.097645},{"name":"Baptiste","played":6,"wins":"5","hero_impact_score":0.0951326},{"name":"Lyra","played":23,"wins":"14","hero_impact_score":0.0747016},{"name":"Grumpjaw","played":22,"wins":"17","hero_impact_score":0.073895},{"name":"Flicker","played":10,"wins":"8","hero_impact_score":0.0596456},{"name":"Taka","played":11,"wins":"10","hero_impact_score":0.0439274},{"name":"Petal","played":7,"wins":"7","hero_impact_score":0.029325},{"name":"SAW","played":5,"wins":"5","hero_impact_score":0.02552},{"name":"Gwen","played":108,"wins":"90","hero_impact_score":0.020825},{"name":"Ardan","played":27,"wins":"21","hero_impact_score":0.0191644},{"name":"Glaive","played":59,"wins":"49","hero_impact_score":0.017955},{"name":"Samuel","played":28,"wins":"26","hero_impact_score":0.0004256},{"name":"Ringo","played":84,"wins":"74","hero_impact_score":0},{"name":"Skye","played":21,"wins":"20","hero_impact_score":0},{"name":"Rona","played":20,"wins":"19","hero_impact_score":0},{"name":"Alpha","played":7,"wins":"4","hero_impact_score":0},{"name":"Adagio","played":54,"wins":"47","hero_impact_score":0},{"name":"Joule","played":33,"wins":"30","hero_impact_score":0},{"name":"Fortress","played":2,"wins":"2","hero_impact_score":0},{"name":"Phinn","played":18,"wins":"17","hero_impact_score":0},{"name":"Blackfeather","played":31,"wins":"26","hero_impact_score":0}]}';

        return json_decode($request, true);
        // return json_decode($request->getBody(), true);
    }
}
