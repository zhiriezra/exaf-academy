<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afrexa - Authentication</title>
    <link rel="icon" href="{{ asset('favicon_io/favicon.ico') }}">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <div class="">
        {{ $slot }}
    </div>
    @livewireScripts
</body>
</html>
