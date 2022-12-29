<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel Startup Kit</title>
        @vite('resources/js/app/js')
    </head>
    <body>
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
