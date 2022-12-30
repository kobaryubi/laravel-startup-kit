@props(['messages'])

@if ($messages)
    <ul>
        @foreach ($messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
