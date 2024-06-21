@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="mt-5">
    <x-header>Log In</x-header>

    <x-form method="POST" action="/login">
        <x-input label="Email" name="email" type="email"></x-input>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <x-input label="Password" name="password" type="password"></x-input>
        @error('password')
            <p>{{ $message }}</p>
        @enderror

        <a href="/register" class="text-deco text-primary">You dont have account? Register here!</a>

        <div class="w-50 d-flex justify-content-between">
            <x-button>Sign In</x-button>
            <x-button class="btn-secondary"><a href="/" class="btn-primary text-deco">Cancel</a></x-button>
        </div>
    </x-form>
</div>
