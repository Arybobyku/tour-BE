<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>
    <div class="flex gap-x-10">

        <a href="{{ route('kabupaten.show') }}" class="bg-white w-auto p-10 rounded-lg flex-col items-center drop-shadow-md">
            <div class="font-bold text-2xl">
                Kabupaten
            </div>
            <div class="font-light text-6xl mt-5 text-center">
                {{count($kabupaten)}}
            </div>
        </a>

        <a href="" class="bg-white p-10 rounded-lg flex-col items-center drop-shadow-md">
            <div class="font-bold text-2xl">
                Objek Wisata
            </div>
            <div class="font-light text-6xl mt-5 text-center">
                0
            </div>
        </a>

    </div>
</x-app-layout>
