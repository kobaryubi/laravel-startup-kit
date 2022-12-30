<x-layout>
    <form method="POST" action="{{ route('chirps.store') }}">
        @csrf
        <textarea
            name="message"
            placeholder="What's on your mind?"
        >{{ old('message') }}</textarea>
        <x-input-error :messages="$errors->get('message')"/>
        <button type="submit">submit</button>
    </form>
</x-layout>
