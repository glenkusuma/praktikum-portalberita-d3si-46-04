@extends('layouts.main')
@section('page_title', 'Article')
@section('style')
<style>
    .img-height{
        height: 300px;
    }
</style>
@endsection
@section('content')
    <div>
        <div class="mt-5">
            <h1>Berita hari ini</h1>
        </div>
    </div>
    <div style="max-height: 300px">
        {{-- <div class="row">
            <div class="col">
                <div class="card mt-5" style="width: 25rem;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/768px-Bootstrap_logo.svg.png" class="card-img-top img-thumbnail object-fit-cover img-height" alt="logo bootstrap">
                    <div class="card-body mt-3">
                        <h5 class="card-title">Bootstarp</h5>
                        <p class="card-text">Bootstrap adalah kerangka kerja HTML, CSS, dan JavaScript yang bersifat open source. Kerangka kerja ini digunakan untuk membuat desain website yang responsive dan modern.</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Detail Selengkapnya</a>
                    </div>
                    <div class="card">
                        <div class="card-header">
                        Last update 3 mins ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-5" style="width: 25rem;">
                    <img src=https://logowik.com/content/uploads/images/tailwind-css3232.logowik.com.webp class="card-img-top img-thumbnail object-fit-cover img-height" alt="logo tailwind">
                    <div class="card-body">
                        <h5 h5 h5 class="card-title mt-3">Tailwind</h5>
                        <p class="card-text">
                        Tailwind CSS adalah framework CSS yang menyediakan class CSS siap pakai untuk membuat desain yang kompleks dengan menyediakan sekumpulan class CSS yang dapat dikombinasikan.</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Detail Selengkapnya</a>
                    </div>
                    <div class="card mt-1">
                        <div class="card-header">
                            Last update 3 mins ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-5" style="width: 25rem;">
                    <img src="https://i.pinimg.com/736x/ab/8b/5e/ab8b5ea6637ebd8e5755c838d952b8c1.jpg" class="card-img-top img-thumbnail object-fit-cover img-height" alt="logo laravel">
                    <div class="card-body mt-3">
                        <h5 class="card-title">Laravel</h5>
                        <p class="card-text">Laravel adalah framework PHP yang populer di seluruh dunia. Laravel dibangun dengan konsep MVC yang membuat kode lebih terstruktur dan mudah dimaintain.</p>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Detail Selengkapnya</a>
                    </div>
                    <div class="card mt-1">
                        <div class="card-header">
                        Last update 3 mins ago
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
{{-- @dd($data) --}}
    <div class="row">
        @foreach ($data as $article)
            <div class="col">
                <div class="card mt-5" style="width: 25rem;">
                    <img src="{{ asset($article['image'])  }}" class="card-img-top img-thumbnail object-fit-cover img-height" alt="{{ $article['title'] }}">
                    <div class="card-body mt-3">
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-text">{{ $article['subtitle'] }}</p>
                    </div>
                    <div class="card-body">
                        <a href="detail-article/{{ $article['slug'] }}" class="card-link">Detail Selengkapnya</a>
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
@endsection



