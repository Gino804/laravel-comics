@extends('layouts.main')

@section('main-content')
  <main id="comic-main">
    <div class="head"></div>

    <div class="container">
      <figure class="@if ($comic['title'] == 'Action Comics #1000: The Deluxe Edition' || $comic['title'] == 'Catwoman Vol. 1: Copycats') thin @endif">
        <img src="{{ $comic['thumb'] }}">
        <div class="type">{{ $comic['type'] }}</div>
        <div class="gallery">view gallery</div>
      </figure>

      <section id="comic">
        <div class="comic-info">
          <h1>{{ $comic['title'] }}</h1>

          <div class='purchase-info'>
            <div class="price">
              <p><span>U.S. Price:</span> {{ $comic['price'] }}</p>
              <p><span>AVAILABLE</span></p>
            </div>
            <div class="availability">
              <p>Check Availability &#9662;</p>
            </div>
          </div>

          <p class="description">{{ $comic['description'] }}</p>
        </div>

        <div class="adv">
          <h3>ADVERTISEMENT</h3>
          <img src="{{ asset('images/visa.jpg') }}" alt="Advertisement">
        </div>
      </section>
    </div>

    <div class="other-info">
      <div class="container">
        <div class="talent">
          <h2>Talent</h2>

          <div>
            <div>
              Art by:
            </div>
            <div>
              @foreach ($comic['artists'] as $artist)
                @if ($loop->index != count($comic['artists']) - 1)
                  <span><a href="#">{{ $artist }}</a>, </span>
                @else
                  <span><a href="#">{{ $artist }}</a> </span>
                @endif
              @endforeach
            </div>
          </div>

          <div>
            <div>
              Written by:
            </div>
            <div>
              @foreach ($comic['writers'] as $writer)
                @if ($loop->index != count($comic['writers']) - 1)
                  <span><a href="#">{{ $writer }}</a>, </span>
                @else
                  <span><a href="#">{{ $writer }}</a> </span>
                @endif
              @endforeach
            </div>
          </div>
        </div>

        <div class="specs">
          <h2>Specs</h2>

          <div>
            <div>Series:</div>
            <div><a href='#'> {{ $comic['series'] }}</a></div>
          </div>

          <div>
            <div>U.S. Price: </div>
            <div>{{ $comic['price'] }}</div>
          </div>

          <div>
            <div>On Sale Date: </div>
            <div>{{ $comic['sale_date'] }}</div>
          </div>

        </div>
      </div>
    </div>

  </main>
@endsection
