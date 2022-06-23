{{-- <x-app-layout> --}}
{{-- <x-app-layout title="{{ $name ?? 'Profile' }}"> --}}
<x-app-layout :title=" $username ?? 'Profile'">
    <h1>Profile of {{ $username ?? 'my page' }}</h1>
    
</x-app-layout>