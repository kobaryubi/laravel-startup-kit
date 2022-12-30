<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Startup Kit</title>
        @vite('resources/js/app/js')
    </head>
    <body>
        @include('layouts.navigation')
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
