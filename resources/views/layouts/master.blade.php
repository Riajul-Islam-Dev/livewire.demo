<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>

    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/livewire.css') }}">
</head>

<body>
    @yield('content')

    @livewireScripts
</body>

</html>
