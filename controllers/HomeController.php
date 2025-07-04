<?php


class HomeController extends Controller {
    public function index() {
        $berita = [
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
                'image' => 'http://smkpansa.sch.id/media_library/posts/medium/56e60e4669bfacdf01f28943b3f6daad.jpg',
                'created_at' => '2023-01-02 10:00:00'
            ],
            [
                'id' => 3,
                'title' => 'Kerja Sama Internasional',
                'description' => 'Universitas Widya Husada Semarang menjalin kerja sama dengan',
                'content' => 'Universitas Widya Husada Semarang menjalin kerja sama dengan universitas terkemuka di luar negeri untuk meningkatkan kualitas pendidikan dan penelitian. Mahasiswa kami akan mendapatkan kesempatan untuk belajar di luar negeri dan berpartisipasi dalam program pertukaran pelajar.',
                'image' => 'http://smkpansa.sch.id/media_library/posts/medium/56e60e4669bfacdf01f28943b3f6daad.jpg',
                'created_at' => '2023-01-02 10:00:00'
            ],
        ];
        $galeri = [
            [
                'id' => 1,
                'title' => 'Kegiatan Belajar Mengajar',
                'description' => 'Kegiatan belajar mengajar di kelas',
                'image' => 'http://smkpansa.sch.id/media_library/posts/thumbnail/31894fe264d3eb227c9e82e8547156c2.jpg',
                'created_at' => '2023-01-01 10:00:00'
            ],
            [
                'id' => 2,
                'title' => 'Kegiatan Ekstrakurikuler',
                'description' => 'Kegiatan ekstrakurikuler siswa',
                'image' => 'http://smkpansa.sch.id/media_library/posts/medium/702dec9a74140ae815237f1375347258.jpg',
                'created_at' => '2023-01-02 10:00:00'
            ],
            [
                'id' => 3,
                'title' => 'Kegiatan Ekstrakurikuler',
                'description' => 'Kegiatan ekstrakurikuler siswa',
                'image' => 'http://smkpansa.sch.id/media_library/posts/thumbnail/4389026015f7bab6e2c82e8ea67f1f08.jpeg',
                'created_at' => '2023-01-02 10:00:00'
            ],
            [
                'id' => 4,
                'title' => 'Kegiatan Ekstrakurikuler',
                'description' => 'Kegiatan ekstrakurikuler siswa',
                'image' => 'http://smkpansa.sch.id/media_library/posts/medium/90912bbefb41be21b184628994ad080e.jpg',
                'created_at' => '2023-01-02 10:00:00'
            ]
            ];
        // Load the home view
        $this->layout('home/index', 'default',[
            'title' => 'Home',
            'description' => 'Selamat datang di Sistem Informasi Sekolah',
            'berita' => $berita,
            'galeri' => $galeri,
        ]);
    }

    
}
