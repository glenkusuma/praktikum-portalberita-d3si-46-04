<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Contracts\View\View;

class ArticleController extends Controller
{
    public function index() : View
    {
        $data = Article::all();
        return view("dashboard.article.index")->with(compact('data'));
    }
    public function show() {
        $data = Article::with('category')->get();
        return response()->json($data);
    }
    public function seed() {
        $Category_data = [
            [
                'name' => 'Framework',
            ],
            [
                'name' => 'Pandemi',
            ],
            [
                'name' => 'Olahraga',
            ],
        ];
        $article_data = [
            [
                "title" => "Bootstarp",
                "subtitle" => "Bootstrap adalah kerangka kerja HTML, CSS, dan JavaScript yang bersifat open source. Kerangka kerja ini digunakan untuk membuat desain website yang responsive dan modern.",
                "content" => "Bootstrap adalah kerangka kerja HTML, CSS, dan JavaScript yang bersifat open source. Kerangka kerja ini digunakan untuk membuat desain website yang responsive dan modern.",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/768px-Bootstrap_logo.svg.png",
                "slug" => "bootstarp",
                "category_id" => "1",
            ],
            [
                "title" => "Tailwind",
                "subtitle" => "Tailwind CSS adalah framework CSS yang menyediakan class CSS siap pakai untuk membuat desain yang kompleks dengan menyediakan sekumpulan class CSS yang dapat dikombinasikan.",
                "content" => "Tailwind CSS adalah framework CSS yang menyediakan class CSS siap pakai untuk membuat desain yang kompleks dengan menyediakan sekumpulan class CSS yang dapat dikombinasikan.",
                "image" => "https://logowik.com/content/uploads/images/tailwind-css3232.logowik.com.webp",
                "slug" => "tailwind",
                "category_id" => "1",
            ],
            [
                "title" => "Laravel",
                "subtitle" => "Laravel adalah framework PHP yang populer di seluruh dunia. Laravel dibangun dengan konsep MVC yang membuat kode lebih terstruktur dan mudah dimaintain.",
                "content" => "Laravel adalah framework PHP yang populer di seluruh dunia. Laravel dibangun dengan konsep MVC yang membuat kode lebih terstruktur dan mudah dimaintain.",
                "image" => "https://i.pinimg.com/736x/ab/8b/5e/ab8b5ea6637ebd8e5755c838d952b8c1.jpg",
                "slug" => "laravel",
                "category_id" => "1",
            ],

            [
                "title" => "Peningkatan Kasus COVID-19 di Indonesia",
                "subtitle" => "Pemerintah Berlakukan Pembatasan Sosial Berskala Besar",
                "content" => "Kasus COVID-19 di Indonesia mengalami peningkatan yang signifikan dalam beberapa pekan terakhir. Pemerintah pun mengambil langkah untuk mengatasi lonjakan kasus ini dengan memberlakukan pembatasan sosial berskala besar (PSBB) di beberapa daerah.",
                "slug" => "peningkatan-kasus-covid-19-di-indonesia",
                "image" => "assets/article/peningkatan-kasus-covid-19-di-indonesia.jpg",
                "category_id" => "2",
            ],
            [

                "title" => "Pemerintah Luncurkan Program Bantuan UMKM",
                "subtitle" => "Dukung Pemulihan Ekonomi Pasca Pandemi",
                "content" => "Pemerintah meluncurkan program bantuan usaha mikro, kecil, dan menengah (UMKM) untuk mendukung pemulihan ekonomi pasca pandemi COVID-19. Bantuan ini berupa dana hibah dan fasilitas pembiayaan yang diharapkan dapat membantu pelaku UMKM untuk mempertahankan dan mengembangkan usahanya.",
                "slug" => "pemerintah-luncurkan-program-bantuan-umkm",
                "image" => "assets/article/bantuan-umkm.jpg",
                "category_id" => "2",
            ],
            [

                "title" => "Timnas Indonesia Melaju ke Final Piala AFF",
                "subtitle" => "Mengalahkan Malaysia dengan Skor 4-1",
                "content" => "Timnas Indonesia berhasil melaju ke final Piala AFF 2023 setelah mengalahkan Malaysia dengan skor 4-1 di leg kedua semifinal. Dengan kemenangan ini, Indonesia akan menghadapi Vietnam di partai puncak.",
                "slug" => "timnas-indonesia-memaju-ke-final-piala-aff",
                "image" => "assets/article/timnas-indonesia-vs-malaysia.jpeg",
                "category_id" => "3",
            ]
            ];

        foreach ($Category_data as $data) {
            Category::create($data);
        }
        foreach ($article_data as $data) {
            Article::create($data);
        }
        // Optionally, you can return a response or redirect to another page
        return response()->json(['message' => 'Article inserted successfully']);
    }

    public function truncate() {
        Article::truncate();
        return response()->json(['message' => 'Article truncated successfully']);
    }
}

