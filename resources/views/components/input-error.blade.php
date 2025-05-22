@props(['messages'])

@if ($messages)
    <span {{ $attributes->merge(['class' => 'text-red-700 text-center']) }}>
        @foreach ((array) $messages as $message)
            <span>{{ $message }}</span>
        @endforeach
    </span>
@endif
