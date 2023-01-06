<x-app-layout>
    <form method="POST" action="{{ route('chirps.update', $chirp) }}">
        @csrf
        @method('patch')
        <textarea name="message">{{ old('message', $chirp->message )}}</textarea>
        <x-input-error :messages="$errors->get('message')" />
        <button type="submit">Save</button>
    </form>
    <a href="{{ route('chirps.index') }}">Cancel</a>
</x-app-layout>
