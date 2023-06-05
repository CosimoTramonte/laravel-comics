<?php
 $menu_header = config('menuHeader');
?>


<header>

    <div class="header-container">
        <img src="/dc-logo.png" alt="logo">
        <ul>

            @foreach ($menu_header as $items)

                <li><a href="{{ route($items['name']) }}" class="{{Route::currentRouteName() === $items['text'] ? 'active' : ''}}">{{ $items['text'] }}</a></li>

            @endforeach
        </ul>
    </div>

</header>
