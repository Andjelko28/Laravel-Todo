@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="mt-5">
    <x-header>Register</x-header>

    <x-form method="POST" action="/register">
        <x-input label="Email" name="email" type="email"></x-input>
        <x-input label="Password" name="password" type="password"></x-input>
        <x-validation-error name="password" />
        <x-input label="Password Confirmation" name="password_confirmation" type="password"></x-input>

        <a href="/login" class="text-deco text-primary">You have account? Login here!</a>

        <div class="w-50 d-flex justify-content-between">
            <x-button>Sign Up</x-button>
            <x-button class="btn-secondary"><a href="/" class="btn-primary text-deco">Cancel</a></x-button>
        </div>
    </x-form>
</div>
