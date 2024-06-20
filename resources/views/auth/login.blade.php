@vite(['resources/sass/app.scss', 'resources/js/app.js'])


<x-header>Login</x-header>

<x-form method="POST" action="/login">
    <x-input label="Email" name="email" type="email"></x-input>
    <x-input label="Password" name="password" type="password"></x-input>

    <x-button>Sign In</x-button>
</x-form>
