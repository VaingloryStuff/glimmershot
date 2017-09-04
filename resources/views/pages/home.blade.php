@extends('layouts.home')

@section('slogan')
  <p class="title">Minimalistic Player Statistics
  </p>
@stop

@section('columns')
  <div class="column is-6">
    <div class="panel">
      <div class="panel-block section">
        <p>Glimmershot is a simple Vainglory API site that doesn't provide any match history,
          instead it focuses on quick up-to-date player info lookup.
        </p>
      </div>
    </div>
  </div>
  <div class="column is-6">
    <div class="panel">
      <div class="panel-block section">
        <p>Glimmershot provides all information listed <a href="https://developer.vainglorygame.com/docs#players">here</a>
        </p>
      </div>
    </div>
  </div>
@stop