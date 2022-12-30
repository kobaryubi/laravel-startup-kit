<x-app-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" :value="old('name')" autofocus required />
            <x-input-error :messages="$errors->get('name')" />
        </div>
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" />
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" autocomplete="new-password" required />
            <x-input-error :messages="$errors->get('password')" />
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required />
            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>
        <button>register</button>
    </form>
</x-app-layout>
