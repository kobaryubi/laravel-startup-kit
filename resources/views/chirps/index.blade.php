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
                <p>{{ $chirp->user->name }}</p>
                <p>{{ $chirp->created_at->format('j M Y, g:i a')}}</p>
            </li>
        @endforeach
    </ul>
</x-app-layout>
