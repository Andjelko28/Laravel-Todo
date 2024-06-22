<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>

    <div id="app">


        <div>
            <nav class="d-flex justify-content-between text-deco bg-black">
                <router-link to="/" class="text-deco fs-2 m-2">Notes</router-link>
                <div class="m-2">
                    <router-link to="/login"  class="text-deco btn btn-primary m-2">Log In</router-link>
                    <router-link to="/register" class="text-deco btn btn-primary">Sign Up</router-link>
                </div>
            </nav>

            <main>
                <div>
                    <router-view></router-view>
                </div>
            </main>
        </div>


    </div>
</body>

</html>
