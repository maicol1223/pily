<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <style>
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .error {
            font-size: 40px;
        }

        .msg {
            font-size: 25px;
        }
    </style>
</head>

<body>

    <div class="error">
        Ocurrió un error: @yield('code')
    </div>

    <div class="msg">
        Mensaje: @yield('message')
    </div>

</body>

</html>
