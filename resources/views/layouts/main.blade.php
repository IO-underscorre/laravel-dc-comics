<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/ico" href="{!! asset('favicon.ico') !!}" />

    <title>@yield('page_title')</title>

    @vite('resources/js/app.js')
</head>

<body>
    <header>
        @include('partials.topbar')

        @yield('jumbo')
    </header>

    @yield('content')

    @include('partials.footer')
</body>

</html>
