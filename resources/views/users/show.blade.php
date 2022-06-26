<x-app-layout title="Show User Page">
    <div class="container">
        <h1 class="mb-4">Show User Page</h1>
        Name: {{ $user->name }}

    </div>
    {{-- App\Models\User::factory()->count()   --}}

</x-app-layout>