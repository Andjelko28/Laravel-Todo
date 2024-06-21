<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>

    <div class="d-flex justify-content-between fs-2 bg-black">
        <div class="mx-0 my-auto">
            <a href="" class="p-1 m-3 text-deco">Notes</a>
        </div>
        <div class="m-3">

            @auth
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-md"><a class="p-1 m-3 text-deco">Log Out</a></button>
                </form>
            @endauth

            @guest
                <button class="btn btn-primary btn-md"><a href="/login" class="p-1 m-3 text-deco">Log In</a></button>
                <button class="btn btn-primary btn-md"><a href="/register" class="p-1 m-3 text-deco">Sign Up</a></button>
            @endguest

        </div>
    </div>

    <div>
        {{ $slot }}
    </div>

</body>

</html>
