<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            margin: 0
        }

        .background {
            height: 100vh;

            display: grid;
            place-items: center;

            background-image: url("{{ asset('assets/background.jpg') }}");
            background-position: center;
            background-size: cover;

            filter: blur(8px);
        }

        .title {
            position: fixed;
            top: 40px;
            left: 50%;
            transform: translateX(-50%);

            padding: 50px;
            border-radius: 10px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 90px;
            font-weight: bolder;
            background-color: rgba(0, 0, 0, 0.5);
            color: hsl(16, 100%, 80%);
        }

        .card {
            position: fixed;
            background-color: rgba(0, 0, 0, 0.5);

            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 60px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            padding: 30px;
            border-radius: 20px;

            display: grid;

            gap: 20px;
        }

        .card a {
            text-align: center;
            text-decoration: none;
            display: block;
            background-color: hsl(16, 100%, 60%);
            border-radius: 20px;
            padding: 20px;
            cursor: pointer;
            transition: all 300ms;
        }

        .card a:visited {
            color: white;
        }

        .card a:hover {
            background-color: hsl(16, 100%, 50%);
        }
    </style>
</head>

<body>
    <div class="background"></div>
    <div class="title">Panadería</div>
    @if (Route::has('login'))
        <div class="card">
            @auth
                <a href="{{ url('/home') }}" class="home">Home</a>
            @else
                <a href="{{ route('login') }}" class="login">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="register">Register</a>
                @endif
            @endauth
        </div>
    @endif
</body>

</html>
