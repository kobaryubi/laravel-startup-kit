<x-layout>
    <form method="POST" action="{{ route('chirps.store') }}">
        @csrf
        <button type="submit">submit</button>
    </form>
</x-layout>
