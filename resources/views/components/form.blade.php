<form {{ $attributes(['class' => 'mb-3 d-flex flex-column align-items-center', 'method' => 'GET']) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif
    {{ $slot }}
</form>
