@extends('layout.main')

@section('content')

<div class="main-container">
    <div class="card-container">
        <div class="tag-series">
            <span>MOVIES DETAILS</span>
        </div>

        <div class="imgContainer py-5">
            <img src="{{ $movieChosen['thumb'] }}" alt="{{ $movieChosen['title'] }}">
        </div>

        <div class="infoDiv">
            <h6>Title</h6>
            <h2 class="pb-3" >{{ $movieChosen['title'] }}</h2>
            <h6>Series</h6>
            <h4 class="pb-3" >{{ $movieChosen['series'] }}</h4>
            <h6>Price</h6>
            <h5 class="pb-3" >{{ $movieChosen['price'] }}</h5>
            <h6>Description</h6>
            <p class="pb-3" >{{ $movieChosen['description'] }}</p>
            <h6>Writers</h6>
            <p class="pb-3" >{{ implode(' - ', $movieChosen['writers']) }}</p>
        </div>

        <div class="button-container">
            <a class="text-white text-decoration-none" href="{{ route('movies') }}">
                <div class="movies-button">
                    <span>ALL MOVIES</span>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
