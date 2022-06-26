<x-app-layout title="User Page">
    <div class="container">
        <h1 class="mb-4">User Page</h1>
        @foreach ($users as $user)
            <li><a href="{{ route('user.show', $user) }}">{{ $user->name }}</a></li>        
            {{-- <li><a href="{{ route('user.show', $user->username) }}">{{ $user->name }}</a></li>         --}}
            {{-- <li><a href="users/{{ $user->username }}">{{ $user->name }}</a></li>         --}}
        @endforeach

    </div>
    {{-- App\Models\User::factory()->count()   --}}

</x-app-layout>