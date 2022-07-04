<x-app-layout title="Home Page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Welcome to My Site</div>
                    <div class="card-body"><h1>HALUUUUUUUU</h1></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>








{{-- <x-app-layout title="Home Page"> --}}
    {{-- @section('styles')
    <style>
        body{
            background-color: rgb(31, 0, 157);
        }
    </style>
        
    @endsection --}}
    {{-- @slot('styles')
        <style>
            body{
                background-color: rgb(108, 4, 4);
            }
        </style>
    @endslot
    <h1>Home Page</h1>
</x-app-layout>

 --}}

























{{-- @extends('layouts.app', ['title' => 'Home'])


@section('content')
    <x-app-layout>

    </x-app-layout> --}}


    {{-- <x-layout.app>

    </x-layout.app> --}}
    {{-- @component('components.layout.app')
        
    @endcomponent --}}

    {{-- @component('components.alert', ['title' => 'hearder dari title']) --}}
    {{-- @component('components.alert') --}}

    {{-- --------------------------------------------------------------------------------------- --}}
    {{-- <x-alert>
        @slot('title')
            <strong>Header</strong> dari title
        @endslot
        alerrtt        
    </x-alert> --}}
    {{-- --------------------------------------------------------------------------------------- --}}
    
    
    {{-- @include('components.alert') --}}
    
{{-- @endsection --}}