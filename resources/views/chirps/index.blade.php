<x-layout>
    <form method="POST" action="{{ route('chirps.store') }}">
        @csrf
        <textarea
            name="message"
            placeholder="What's on your mind?"
        >{{ old('message') }}</textarea>
        <button type="submit">submit</button>
    </form>
</x-layout>
