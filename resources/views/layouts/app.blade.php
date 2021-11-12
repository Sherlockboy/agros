<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>AgroS</title>
    
    @includeIf('components.styles')
</head>

<body>
    @includeIf('components.loader')

    <div class="body_wrapper">
        @includeIf('components.header')

        @yield('content')

        @includeIf('components.footer')
    </div>

    @includeIf('components.scripts')
</body>

</html>