<?php
 $menu_header = config('menuHeader');
?>


<header>

    <div class="header-container">
        <img src="/dc-logo.png" alt="logo">
        <ul>

            @foreach ($menu_header as $items)

                <li class="{{Route::currentRouteName() == $items['name'] ? 'active' : ''}}"><a href="{{ route($items['name']) }}" >{{ $items['text'] }}</a></li>

            @endforeach
        </ul>
    </div>

</header>
