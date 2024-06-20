@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<x-header>Register</x-header>

<x-form method="POST" action="/register">
    <x-input label="Email" name="email" type="email"></x-input>
    <x-input label="Password" name="password" type="password"></x-input>
    <x-input label="Password Confirmation" name="password_confirmation" type="password"></x-input>

    <x-button>Sign Up</x-button>
</x-form>
