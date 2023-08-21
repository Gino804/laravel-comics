@extends('layouts.main')

@section('main-content')
  <main>
    <section id="jumbotron">
      <img src="{{ asset('images/jumbotron.jpg') }}" alt="Jumbotron">
    </section>
    <section id="comics">
      <div class="container">
        <legend>CURRENT SERIES</legend>
        <div class="row">
          @foreach ($comics as $comic)
            <div class="column">
              <div class="card">
                <a href="{{ route('comic', ['index' => $loop->index]) }}">
                  <figure>
                    <img src="{{ $comic['thumb'] }}">
                  </figure>
                </a>
                <h5>{{ $comic['series'] }}</h5>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <a href="#" class="button">LOAD MORE</a>
    </section>
  </main>
@endsection
