<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{-- <div class="my-5">
            <h1 class="text-2xl font-semibold">Berita hari ini</h1>
        </div> --}}

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($data as $article)
                    <div class="col">
                        <div class="max-w-sm overflow-hidden shadow-lg mt-5 p-4 rounded-xl bg-white">
                            <img src="{{ asset($article['image']) }}" class="w-full object-cover img-height" alt="{{ $article['title'] }}">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">{{ $article['title'] }}</div>
                                <p class="text-gray-700 text-base">{{ $article['subtitle'] }}</p>
                            </div>
                            <div class="px-6 pt-4 pb-2">
                                <a href="detail-article/{{ $article['slug'] }}" class="text-blue-500">Detail Selengkapnya</a>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    Last update {{ date('M j, Y H:i:s', strtotime($article['updated_at'])) }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <x-slot name="style">
        <style>
            .img-height {
            height: 300px;
        }
        </style>

    </x-slot>
</x-app-layout>


