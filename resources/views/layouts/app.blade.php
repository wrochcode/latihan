<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}  | Latihan</title>
    {{-- <link rel="stylesheet" href={{ asset('/css/style.css') }}> --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- @yield('styles') --}}

    {{ $styles }}


    {{-- ---------------------------------------------------- --}}
    {{-- @if (isset($styles))
        {{ $styles }}
    @endif    --}}
    {{-- ---------------------------------------------------- --}}
</head>
<body>
    {{-- @include('layouts.navbar') --}}
    <x-navbar></x-navbar>
    {{-- @yield('content') --}}
    {{ $slot }}
</body>
</html>