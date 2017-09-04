@extends('layouts.player')

@section('header')
    <div class="column is-half is-offset-one-quarter">
        <div class="summoner-profile-picture">
            <img src="{{ asset('images/portraits/Vox_Portrait.png') }}"
                 alt="{{ $player['picks']['0']['actor'] }}">
            <div class="region has-text-centered">
                {{ $player['shard_id'] }}
            </div>
        </div>
        <p class="title has-text-centered">
            {{ $player['name'] }}
        </p>
    </div>
@stop

@section('content')
<section class="section">
    <div class="container">

        <div class="columns">
            <div class="column">

                <div class="box">
                    <h3 class="subtitle is-3 has-text-centered">Ranked</h3>
                    {!! $ranked_chart->render() !!}
                </div>

            </div>

            <div class="column">
                <div class="box">
                    <h3 class="subtitle is-3 has-text-centered">Casual</h3>
                    {!! $casual_chart->render() !!}
                </div>
            </div>
        </div>

    </div>
</section>

<p>
    {{ $player['picks']['0']['actor'] }}
    {{ $player['picks']['0']['hero_pick'] }}
</p>
@stop