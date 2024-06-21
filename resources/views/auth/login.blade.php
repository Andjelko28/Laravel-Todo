@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="mt-5">
    <x-header>Login</x-header>

    <x-form method="POST" action="/login">
        <x-input label="Email" name="email" type="email"></x-input>
        <x-input label="Password" name="password" type="password"></x-input>

        <div class="w-50 d-flex justify-content-between">
            <x-button>Sign In</x-button>
            <x-button class="btn-secondary"><a href="/" class="btn-primary text-deco">Cancel</a></x-button>
        </div>
    </x-form>
</div>
