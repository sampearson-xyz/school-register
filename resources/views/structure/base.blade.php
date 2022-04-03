<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('extra_scripts')
</head>
<body class="m-0 bg-deep-blue dark">
    <div class="container m-auto max-w-7xl p-4 xl:py-4 xl:px-0">
        @yield('content')
    </div>
</body>
