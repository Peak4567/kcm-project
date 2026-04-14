<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- fontawesome --}}
    <link href="{{ asset('assets/font-awesome/css/all.min.css') }}" rel="stylesheet">

    {{-- tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- AlpineJs --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>KrachabMitr</title>
</head>

<body>
    @include('component.navbar')
    @yield('content')
    @include('component.footer')
</body>

</html>
