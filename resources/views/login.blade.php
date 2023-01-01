<x-app-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" />
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" />
        </div>
        <div>
            <label for="remember">
                <input id="remember" type="checkbox" name="remember">
                <span>Remember me</span>
            </label>
        </div>
        <button>Log in</button>
    </form>
</x-app-layout>
