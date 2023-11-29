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

        <div style="max-height: 300px">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="col">
                    <div class="max-w-sm overflow-hidden shadow-lg mt-5 p-4 rounded-xl bg-white">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/768px-Bootstrap_logo.svg.png" class="w-full object-cover img-height" alt="logo bootstrap">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Bootstarp</div>
                            <p class="text-gray-700 text-base">Bootstrap adalah kerangka kerja HTML, CSS, dan JavaScript yang bersifat open source. Kerangka kerja ini digunakan untuk membuat desain website yang responsive dan modern.</p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <a href="#" class="text-blue-500">Detail Selengkapnya</a>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Last update 3 mins ago
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="max-w-sm overflow-hidden shadow-lg mt-5 p-4 rounded-xl bg-white">
                        <img src="https://logowik.com/content/uploads/images/tailwind-css3232.logowik.com.webp" class="w-full object-cover img-height" alt="logo tailwind">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Tailwind</div>
                            <p class="text-gray-700 text-base">Tailwind CSS adalah framework CSS yang menyediakan class CSS siap pakai untuk membuat desain yang kompleks dengan menyediakan sekumpulan class CSS yang dapat dikombinasikan.</p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <a href="#" class="text-blue-500">Detail Selengkapnya</a>
                        </div>
                        <div class="card mt-1">
                            <div class="card-header">
                                Last update 3 mins ago
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="max-w-sm overflow-hidden shadow-lg mt-5 p-4 rounded-xl bg-white">
                        <img src="https://i.pinimg.com/736x/ab/8b/5e/ab8b5ea6637ebd8e5755c838d952b8c1.jpg" class="w-full object-cover img-height" alt="logo laravel">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Laravel</div>
                            <p class="text-gray-700 text-base">Laravel adalah framework PHP yang populer di seluruh dunia. Laravel dibangun dengan konsep MVC yang membuat kode lebih terstruktur dan mudah dimaintain.</p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <a href="#" class="text-blue-500">Detail Selengkapnya</a>
                        </div>
                        <div class="card mt-1">
                            <div class="card-header">
                                Last update 3 mins ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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


