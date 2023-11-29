<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index()
    {
        $data = [
            [
                "id" => 1,
                "title" => "Peningkatan Kasus COVID-19 di Indonesia",
                "subtitle" => "Pemerintah Berlakukan Pembatasan Sosial Berskala Besar",
                "content" => "Kasus COVID-19 di Indonesia mengalami peningkatan yang signifikan dalam beberapa pekan terakhir. Pemerintah pun mengambil langkah untuk mengatasi lonjakan kasus ini dengan memberlakukan pembatasan sosial berskala besar (PSBB) di beberapa daerah.",
                "slug" => "peningkatan-kasus-covid-19-di-indonesia",
                "image" => "assets/article/peningkatan-kasus-covid-19-di-indonesia.jpg",
                "created_at" => "2023-10-10 12:00:00",
                "updated_at" => "2023-10-10 12:30:00"
            ],
            [
                "id" => 2,
                "title" => "Pemerintah Luncurkan Program Bantuan UMKM",
                "subtitle" => "Dukung Pemulihan Ekonomi Pasca Pandemi",
                "content" => "Pemerintah meluncurkan program bantuan usaha mikro, kecil, dan menengah (UMKM) untuk mendukung pemulihan ekonomi pasca pandemi COVID-19. Bantuan ini berupa dana hibah dan fasilitas pembiayaan yang diharapkan dapat membantu pelaku UMKM untuk mempertahankan dan mengembangkan usahanya.",
                "slug" => "pemerintah-luncurkan-program-bantuan-umkm",
                "image" => "assets/article/bantuan-umkm.jpg",
                "created_at" => "2023-10-11 15:00:00",
                "updated_at" => "2023-10-11 15:30:00"
            ],
            [
                "id" => 3,
                "title" => "Timnas Indonesia Melaju ke Final Piala AFF",
                "subtitle" => "Mengalahkan Malaysia dengan Skor 4-1",
                "content" => "Timnas Indonesia berhasil melaju ke final Piala AFF 2023 setelah mengalahkan Malaysia dengan skor 4-1 di leg kedua semifinal. Dengan kemenangan ini, Indonesia akan menghadapi Vietnam di partai puncak.",
                "slug" => "timnas-indonesia-memaju-ke-final-piala-aff",
                "image" => "assets/article/timnas-indonesia-vs-malaysia.jpeg",
                "created_at" => "2023-10-12 18:00:00",
                "updated_at" => "2023-10-12 18:30:00"
            ]
        ];
        return view("dashboard.article.index")->with(compact('data'));
    }
}

