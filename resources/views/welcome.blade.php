<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body class="antialiased">
{{--        <div class="p-4">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}

<div class="flex justify-center">

    <section class="max-w-7xl flex justify-between items-center h-screen">

        <div class="w-1/4 px-3 mb-6">
            <h1 class="text-center">Deck</h1>
            <img class="mx-auto" src="{{ asset('img/back.jpg') }}">
        </div>

        <div class="w-1/4 px-3 mb-6">
            <h1 class="text-center">Card</h1>
            <img class="mx-auto" src="{{ asset('img/tarot-fool.jpg') }}">
        </div>
    </section>
</div>


{{--    <div class="max-w-7xl mix-w-xl ">--}}


{{--        <div class="bg-gray-100 p-4 rounded-lg content-center">--}}
{{--            <section class="flex flex-row">--}}

{{--            </section>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @include('layouts.parts.footer')--}}
</body>
<head>
    @include('layouts.parts.header')
</head>
</html>
