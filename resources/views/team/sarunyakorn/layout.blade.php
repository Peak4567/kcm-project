<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tailwind --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="shortcut icon" href="{{ asset('assets/team/sarunyakorn/img/s-logo.png') }}" type="image/png">
    {{-- GoogleFont --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Font Awesome CDN -->
    <link href=" {{ asset('assets/font-awesome/css/all.min.css') }} " rel="stylesheet">

    {{-- AlpineJs --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Profile | Sarunyakorn</title>
</head>

<body class="bg-[#060B20]">
    
    @include('team.sarunyakorn.components.navbar')
    @yield('content')
    @include('team.sarunyakorn.components.footer')

    <script src="{{ asset('assets/team/sarunyakorn/js/port.js') }}"></script>
</body>

</html>
