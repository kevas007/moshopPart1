<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex">
        @include('backend.partials.sidebar')
        <div class="w-full py-2 mx-5" id="test">
            <div class="w-100  overflow-hidden ">

                @yield('body')
            </div>
        </div>
    </div>

</x-app-layout>

{{-- @extends('layouts.app')
@section('content')
<div id="app">
    <example-component></example-component>
</div>

@endsection --}}
