<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/welcome-page.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="circle-black">
        <div class="title1">プログラミングアカデミー</div>
        <div class="title2">ナレッジノート</div>
        <div class="btns">
            @if (Route::has('login'))
                <div class="btns">
                    @auth
                        <a href="{{ url('/home') }}" class="btn left-position blue-btn">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn left-position blue-btn">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn right-position red-btn">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</body>

</html>
