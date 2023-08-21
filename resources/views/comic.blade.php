@extends('layouts.main')

@section('main-content')
  <main>
    <div class="head"></div>

    <div class="container">
      <figure class="@if ($comic['title'] == 'Action Comics #1000: The Deluxe Edition' || $comic['title'] == 'Catwoman Vol. 1: Copycats') thin @endif">
        <img src="{{ $comic['thumb'] }}">
        <div class="type">{{ $comic['type'] }}</div>
        <div class="gallery">view gallery</div>
      </figure>
    </div>
  </main>
@endsection
