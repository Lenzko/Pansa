<!DOCTYPE html>
<head>
  <style>
    .bg-pengajar {
  background-color: #007bff;
}

.bg-pelajar {
  background-color: #28a745; 
}

.bg-kelas {
  background-color: #ffc107; 
}
.card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}
.card {
  position: relative;
  overflow: hidden;
}

.card::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(
    120deg,
    rgba(255, 255, 255, 0.1) 0%,
    rgba(255, 255, 255, 0.3) 50%,
    rgba(255, 255, 255, 0.1) 100%
  );
  transform: rotate(25deg);
  opacity: 0;
  transition: opacity 0.3s ease;
  pointer-events: none;
}
.fitur-unggulan .card {
  background: linear-gradient(135deg, #FFD700, #FFC107);
  position: relative;
  overflow: hidden;
  transform: scale(1);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

/* Efek berkilau */
.fitur-unggulan .card::after {
  content: '';
  position: absolute;
  top: 0;
  left: -60%;
  width: 50%;
  height: 100%;
  background: linear-gradient(120deg, transparent, rgba(255,255,255,0.6), transparent);
  transform: skewX(-20deg);
  opacity: 0;
  transition: left 0.5s, opacity 0.4s;
}

/* Hover manual */
.fitur-unggulan .card:hover {
  background: linear-gradient(135deg, #FFEA00, #FFB300);
  box-shadow: 0 0 25px rgba(255, 255, 255, 0.4);
  transform: scale(1.03);
}

.fitur-unggulan .card:hover::after {
  left: 120%;
  opacity: 1;
}

/* Animasi auto-hover bergiliran */
@keyframes card-hover {
  0%   { box-shadow: 0 0 20px rgba(255,255,255,0.5); transform: scale(1.03); }
  100% { box-shadow: none; transform: scale(1); }
}

.fitur-unggulan .col-md-3:nth-child(1) .card {
  animation: card-hover 1s ease alternate infinite;
  animation-delay: 0s;
}

.fitur-unggulan .col-md-3:nth-child(2) .card {
  animation: card-hover 1s ease alternate infinite;
  animation-delay: 2s;
}

.fitur-unggulan .col-md-3:nth-child(3) .card {
  animation: card-hover 1s ease alternate infinite;
  animation-delay: 4s;
}

.fitur-unggulan .col-md-3:nth-child(4) .card {
  animation: card-hover 1s ease alternate infinite;
  animation-delay: 6s;
}

.col-md-5-5 {
    width: 35.5%;
    float: left;
    padding: 0 15px;
    
  }

  @media (max-width: 768px) {
    .col-md-4-6 {
      width: 100%;
    }
  }
.card:hover::before {
  opacity: 1;
  animation: shimmer 1.2s linear forwards;
}
.fancy-icon {
  padding: 12px;
  border-radius: 50%;
  background: radial-gradient(circle, #fff8dc, #ffd700);
  box-shadow: 0 0 15px rgba(255, 215, 0, 0.5);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: inline-block;
}

.fancy-icon:hover {
  transform: scale(1.15) rotate(2deg);
  box-shadow: 0 0 25px rgba(255, 223, 0, 0.8);
}

@keyframes shimmer {
  0% {
    transform: translateX(-100%) rotate(25deg);
  }
  100% {
    transform: translateX(100%) rotate(25deg);
  }
}
.foto:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.jumlah-wrapper {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  line-height: 1; /* Hindari offset vertikal karena line spacing */
  height: 3rem; /* Pastikan ada tinggi tertentu agar centering vertikal bisa jalan */
}

.jumlah-wrapper .angka {
  z-index: 2;
  font-size: 2.5rem;
}

.jumlah-wrapper .icon-belakang {
  position: absolute;
  z-index: 1;
  opacity: 0.2;
  font-size: 3.5rem;
  pointer-events: none;
}

.font {
  font-size: 3.0rem;
  font-weight: bold;
  letter-spacing: 1px;
}
.body2 {
  background-color: #FFF2EB; 

}
.body3 {
  
}
@keyframes vibrate {
  0% { transform: translate(0); }
  20% { transform: translate(-5px, 2px); }
  40% { transform: translate(-2px, -2px); }
  60% { transform: translate(2px, 2px); }
  80% { transform: translate(5px, -2px); }
  100% { transform: translate(0); }
}

.vibrate-btn {
  animation: vibrate 3.3s infinite;
  position: relative;
}
/* Efek shimmer dasar */
.shimmer-text {
  position: relative;
  display: inline-block;
  color: #000; /* Warna dasar teks */
  overflow: hidden;
}

.shimmer-text::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  height: 100%;
  width: 100%;
  background: linear-gradient(120deg, transparent 0%, rgba(255,255,255,0.6) 50%, transparent 100%);
  animation: shimmer 2s infinite;
}

@keyframes shimmer {
  0% {
    left: -100%;
  }
  100% {
    left: 100%;
  }
}
.italic-justify {
  font-style: italic;
  text-align: justify;
}

  </style>
</head>
<div style="background-color: #578FCA" class="container-fluid">
  <div class="container pt-5 px-5 pb-2">
    <div class="row justify-content-between">
      <div class="col-7">
        <h1 class="text-left font shimmer-text">SMK<span class="text-primary"> Pancasila 1</span> Kutoarjo</h1>
        <p class="text-left italic-justify ">"Terciptanya sumber daya manusia yang utuh, sehingga menjadi manusia pembangunan yang berjiwa Pancasila, berwawasan global, dan ramah terhadap lingkungan."</p>
        <div class="mt-2">
          <button class="btn btn-primary vibrate-btn">Daftar Sekarang</button>
        </div>
      </div>
      <div class="col-5 ">
        <img class="foto" src="https://th.bing.com/th/id/OIP.KtMSPy2JlbmRLysDhvespAHaFj?w=231&h=180&c=7&r=0&o=7&dpr=1.6&pid=1.7&rm=3" alt="uwhs" class="rounded" widht="350" height="280">
      </div>
    </div>
  </div>
  <br>
  <br>
</div>
<body class="body2">
<!-- Card Info -->
<div class="my-2">
  <br>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="card bg-pengajar">
            <div class="card-body">
              <h5 class="card-title text-center">Pengajar</h5>
              <br>
              <p class="card-text h2 text-center position-relative jumlah-wrapper">24 <i class="fa-solid fa-user icon-belakang"></i></p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card bg-pelajar">
            <div class="card-body">
              <h5 class="card-title text-center">Pelajar</h5>
              <br>
              <p class="card-text h2 text-center jumlah-wrapper">1578 <i class="fa-solid fa-user-graduate icon-belakang"></i></p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card bg-kelas">
            <div class="card-body">
              <h5 class="card-title text-center">Kelas</h5>
              <br>
              <p class="card-text h2 text-center jumlah-wrapper">47 <i class="fa-solid fa-building-columns icon-belakang"></i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div> 
 <!-- Card WHY -->
<div class="container py-3">
  <div class="text-center justify-content-center align-items-center d-flex flex-column my-5">
    <div class="w-50">
      <h1>Kenapa Harus Pilih <span class="text-primary">SMK Pancasila 1 </span>Kutoarjo?</h1>
    </div>
  </div>
  <div class="row fitur-unggulan">
    <div class="col-md-3">
      <div class="card">
        <div class="card-body text-center">
          <img src="./img/icons/computer.png" alt="komputer" class="" width="50" height="50">
          <div class="card-text mt-3">
            <h4>Fasilitas Lengkap</h4>
            <p>Penunjang belajar dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
      <div class="card-body text-center">
          <img src="https://cdn-icons-png.flaticon.com/128/17771/17771437.png" alt="komputer" class="" width="50" height="50">
          <div class="card-text mt-3">
            <h4>Lingkungan Nyaman</h4>
            <p>Penunjang belajar dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
      <div class="card-body text-center">
          <img src="https://cdn-icons-png.flaticon.com/128/14536/14536170.png" alt="komputer" class="" width="50" height="50">
          <div class="card-text mt-3">
            <h4>Pengajar Kompeten</h4>
            <p>Penunjang belajar dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
      <div class="card-body text-center">
          <img src="https://cdn-icons-png.flaticon.com/128/9015/9015385.png" alt="komputer" class="" width="50" height="50">
          <div class="card-text mt-3">
            <h4>Kerja Sama Luas</h4>
            <p>Penunjang belajar dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

<!-- Section Who -->
<div class="container py-4">
  <div class="text-center justify-content-center align-items-center d-flex flex-column my-5">
    <div class="w-50">
      <h1>Tentang Kami</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-5-5">
    <img class="foto fancy-icon" src="data:image/jpeg;base64,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" alt="uwhs" class="rounded" widht="300" height="280">
      
    </div>
    <div style="  text-align: justify;" class="col-md-7">
    <p>SMK Pancasila 1 Kutoarjo adalah sekolah menengah kejuruan swasta yang berdiri sejak 25 Mei 1991, berlokasi di Jl. Mayjend. S. Parman, Kutoarjo, Kabupaten Purworejo, Jawa Tengah. Sekolah ini berada di bawah naungan Kementerian Pendidikan dan Kebudayaan dan dikelola oleh Yayasan Bina Tani Bagelen. </p>
    <p>SMK ini juga dikenal aktif menjalin kerja sama dengan perusahaan besar seperti PT Astra Honda Motor dan PT Astra Daihatsu Motor, serta memiliki Bursa Kerja Khusus (BKK) untuk memfasilitasi lulusan masuk ke dunia industri.</p>
    </div>
  </div>
</div>
</body>
<body class="body3">
  <!-- End of Section Who --> 
 <!-- Section News -->
 <div style="background-color: #98A1BC" class="continer-fluid py-4">
    <div class="container">
      <div class="text-center justify-content-center align-items-center d-flex flex-column my-5">
        <div class="w-50">
          <h1>Berita Terbaru</h1>
        </div>
      </div>
      <div class="row">
        <?php foreach ($data['berita'] as $news) { ?>
        <div class="col-md-4">
          <div class="card">
            <img src="<?= $news['image'] ?>" class="card-img-top" height="200" alt="Berita 1">
            <div class="card-body">
              <h5 class="card-title"><?= $news['title']; ?></h5>
              <p class="card-text"><?= substr($news['description'], 0, 70); ?>...</p>
              <a href="<?= BASE_URL.'artikel/detail/'. $news['id'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="text-center justify-content-center align-items-center d-flex flex-column my-3">
        <div class="w-50">
          <h1>Galeri Kegiatan Kami</h1>
        </div>
      </div>
  <div id="galeriCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
  <div class="carousel-inner">
    <?php 
      $active = true;
      foreach ($data['galeri'] as $galeri) { ?>
      <div class="carousel-item <?= $active ? 'active' : '' ?>">
        <img src="<?= $galeri['image'] ?>" class="d-block mx-auto img-fluid rounded" alt="<?= $galeri['title'] ?>" style="max-height: 400px;">
      </div>
    <?php 
      $active = false;
      } 
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#galeriCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#galeriCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
  <br>
</div>



