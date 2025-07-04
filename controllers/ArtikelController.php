<?php

class ArtikelController extends Controller {
  protected $articles = [
    [
        'id' => 1,
        'title' => 'Penerimaan Mahasiswa Baru 2023',
        'description' => 'Universitas Widya Husada Semarang membuka pendaftaran mahasiswa baru untuk tahun akademik 2023. Segera daftarkan dirimu dan raih kesempatan untuk belajar di kampus terbaik.',
        'content' => 'Universitas Widya Husada Semarang membuka pendaftaran mahasiswa baru untuk tahun akademik 2023. Segera daftarkan dirimu dan raih kesempatan untuk belajar di kampus terbaik. Kami menyediakan berbagai program studi yang berkualitas dan didukung oleh tenaga pengajar yang berpengalaman. Jangan lewatkan kesempatan ini untuk menjadi bagian dari komunitas akademik kami.',
        'image' => 'http://smkpansa.sch.id/media_library/image_sliders/f9e0fa7aef5656c0313657448e33165d.jpg',
        'created_at' => '2023-01-01 10:00:00'
    ],
    [
        'id' => 2,
        'title' => 'Kerja Sama Internasional',
        'description' => 'Universitas Widya Husada Semarang menjalin kerja sama dengan',
        'content' => 'Universitas Widya Husada Semarang menjalin kerja sama dengan universitas terkemuka di luar negeri untuk meningkatkan kualitas pendidikan dan penelitian. Mahasiswa kami akan mendapatkan kesempatan untuk belajar di luar negeri dan berpartisipasi dalam program pertukaran pelajar.',
        'image' => 'http://smkpansa.sch.id/media_library/image_sliders/f9e0fa7aef5656c0313657448e33165d.jpg',
        'created_at' => '2023-01-02 10:00:00'
    ]
];
    public function index() {
        // Load the artikel view
        $this->layout('artikel/index', 'default', [
            'title' => 'Artikel',
            'description' => 'Berita dan artikel terbaru dari Universitas Widya Husada Semarang',
            'articles' => $this->articles
        ]);
    }

    public function detail($id) {
        $id = (int)$id -1;
        // Load the artikel detail view
        $this->layout('artikel/detail', 'default', [
            'title' => 'Detail Artikel',
            'description' => 'Detail artikel dengan ID: ' . $id,
            'article' => $this->articles[$id] ?? null

        ]);
    }
}
