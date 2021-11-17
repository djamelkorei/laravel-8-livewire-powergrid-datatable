<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 8 - Livewire PowerGrid Datatable</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- styles --}}
    @livewireStyles
    @powerGridStyles
</head>

<body>
    <div class="min-h-screen bg-gray-100">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                    {{-- Product PowerGrid Tag --}}
                    <livewire:product-table />

                </div>
            </div>
        </div>
    </div>
    {{-- scripts --}}
    @livewireScripts
    @powerGridScripts
</body>

</html>
