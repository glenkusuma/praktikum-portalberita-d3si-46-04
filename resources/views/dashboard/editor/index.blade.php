<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Penyuntingan') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
        {{-- <div class="my-5">
            <h1 class="text-2xl font-semibold">Penyuntingan</h1>
        </div> --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <x-table-component :$data />
        </div>
    </div>
</x-app-layout>
