<x-app-layout>
    <form method="POST" action="{{ route('chirps.store') }}">
        @csrf
        <textarea
            name="message"
            placeholder="What's on your mind?"
        >{{ old('message') }}</textarea>
        <x-input-error :messages="$errors->get('message')"/>
        <button type="submit">submit</button>
    </form>
    <ul>
        @foreach ($chirps as $chirp)
            <li>
                <p>{{ $chirp->message }}</p>
            </li>
        @endforeach
    </ul>
</x-app-layout>
