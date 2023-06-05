<?php
 $movies_card = config('movies');
?>

@extends('layout.main')

@section('content')

    <div class="main-container">
        <div class="card-container">
        <div class="tag-series">
            <span>CURRENT SERIES</span>
        </div>

        <div class="series">

            @foreach ($movies_card as $card)

                <div class="serie">
                    <div>
                        <img src="{{ $card['thumb'] }}" alt={{ $card['title'] }}">
                    </div>
                    <h5>{{ $card['title'] }}</h5>
                </div>

            @endforeach

        </div>
        </div>

        <div class="load-more-button">
        <span>LOAD MORE</span>
        </div>
    </div>

    <div class="sectionmain-container">
        <div class="items-container">
          <ul>
            <li>
              <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital comics">
              <a href="#">DIGITAL COMICS</a>
            </li>
            <li>
              <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merch">
              <a href="#">DC MERCHANDISE</a>
            </li>
            <li>
              <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="sub">
              <a href="#">SUNSCRIPTION</a>
            </li>
            <li>
              <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="shop locator">
              <a href="#">COMIC SHOP LOCATOR</a>
            </li>
            <li>
              <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="power visa">
              <a href="#">DC POWER VISA</a>
            </li>
          </ul>
        </div>
      </div>

@endsection
