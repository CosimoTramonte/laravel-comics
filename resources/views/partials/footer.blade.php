<?php
    $menus_footer = config('menuFooter');
?>


<footer>
    <div class="footerTop-wrapper">
        <div class="footerTop-container">
          <div class="menus">

            <div class="ct-col">
              <h4>DC COMICS</h4>

              <ul>
                @foreach ($menus_footer['DcComics'] as $items )

                    <li><a href="{{$items['href']}}">{{$items['text']}}</a></li>

                @endforeach
              </ul>

              <h4>SHOP</h4>

              <ul>
                @foreach ($menus_footer['Shop'] as $items )

                    <li><a href="{{$items['href']}}">{{$items['text']}}</a></li>

                @endforeach
              </ul>
            </div>

            <div class="ct-col">
              <h4>DC</h4>
              <ul>
                @foreach ($menus_footer['Dc'] as $items )

                    <li><a href="{{$items['href']}}">{{$items['text']}}</a></li>

                @endforeach
              </ul>
            </div>
            <div class="ct-col">
              <h4>SITES</h4>
              <ul>
                @foreach ($menus_footer['Site'] as $items )

                    <li><a href="{{$items['href']}}">{{$items['text']}}</a></li>

                @endforeach
              </ul>
            </div>
          </div>
          <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="dc logo">
        </div>
      </div>

      <div class="footerBottom-wrapper">
        <div class="footerBottom-container">
          <div class="button">
            <span>SIGN-UP NOW!</span>
          </div>
          <div class="social">
            <span>FOLLOW US</span>
            <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook">
            <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter">
            <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope">
            <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube">
            <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest">
          </div>
        </div>
      </div>
</footer>
