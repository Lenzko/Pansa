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
              <h5 class="card-title">Pengajar</h5>
              <p class="card-text h2 text-center">24 <i class="fa-solid fa-user"></i></p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card bg-pelajar">
            <div class="card-body">
              <h5 class="card-title">Pelajar</h5>
              <p class="card-text h2 text-center">1578 <i class="fa-solid fa-user-graduate"></i></p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card bg-kelas">
            <div class="card-body">
              <h5 class="card-title">Kelas</h5>
              <p class="card-text h2 text-center">47 <i class="fa-solid fa-building-columns"></i></p>
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
          <img src="./img/icons/bank.png" alt="komputer" class="" width="50" height="50">
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
          <img src="./img/icons/team.png" alt="komputer" class="" width="50" height="50">
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
          <img src="./img/icons/team_work.png" alt="komputer" class="" width="50" height="50">
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
      <h1>Siapa Kami?</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-5-5">
    <img class="foto" src="https://lh3.googleusercontent.com/p/AF1QipPhNXY0aDBMvIJKcaIzMdzduFzGPXkhI2zDu33I=s1360-w1360-h1020-rw" alt="uwhs" class="rounded" widht="300" height="280">
      
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



