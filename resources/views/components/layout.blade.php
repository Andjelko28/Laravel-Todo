<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>

    <div class="d-flex justify-content-between fs-2 bg-black">
        <div>
            <a href="" class="p-1 m-3 text-deco">Notes</a>
        </div>
        <div>
            <a href="/login" class="p-1 m-3 text-deco">Log In</a>
            <a href="/register" class="p-1 m-3 text-deco">Sign Up</a>
        </div>
    </div>

    <div>
        {{ $slot }}
    </div>

</body>

</html>
