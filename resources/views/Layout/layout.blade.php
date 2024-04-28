<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">

    <link rel="stylesheet" href="{{ asset('css/mainLayout.css') }}">
    @vite('resources/css/app.css')
</head>
<body>

    <header>

    </header>

    <aside class="left">
        @php
            $menu = [
                'Home' => 'icon/default-home-icon.svg',
                'Browse' => 'icon/default-browse-icon.svg',
                'Favourite' => 'icon/default-favourite-icon.svg',
                'Library' => 'icon/default-library-icon.svg',
                'Account' => 'icon/default-account-icon.svg'
            ]
        @endphp
        @foreach ($menu as $name => $image)
        <div class="h-auto position-relative m-2 p-2 rounded-3 d-flex align-items-center btnMenu">
            <img src="{{asset($image)}}" class="icon {{ $name == 'Home' ? 'selected' : ''}}">
            <span>{{$name}}</span>
        </div>
        @endforeach
    </aside>

    <aside class="right">
        <div class="current-cover-container">
            <img src="{{asset('images/sea-of-problem.jpg')}}" alt="">
        </div>
        <div class="music-interface">
            <div class="wave-music-duration"></div>
            <span class="duration-start">1:00</span>
            <span class="duration-end">2:00</span>
        </div>
    </aside>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="position-fixed bottom-0 p-0 d-flex justify-content-center align-items-center w-100 h-auto">
        <img src="{{asset('icon/play-button.svg')}}" alt="">
    </footer>
    <script src="{{asset('jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('js/mainLayout.js')}}"></script>
    @yield('Scripts')
</body>
</html>
