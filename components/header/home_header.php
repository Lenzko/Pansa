<!DOCTYPE html>
<head>
<style>
  .nav-putih .nav-link {
    color: white !important;
  }
  .logo-glow {
    transition: all 0.3s ease;
  }

  .logo-glow:hover {
    filter: drop-shadow(0 0 8px #00faff) brightness(1.2);
    transform: scale(1.1) rotate(1deg);
    cursor: pointer;
  }
  .nav-link {
  position: relative;
  color: #000; /* Warna teks awal */
  text-decoration: none;
  transition: color 0.3s ease;
}

.nav-link:hover {
  color: #007bff; /* Ubah ke warna biru saat hover */
}

.nav-link::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0%;
  height: 2px;
  background-color:rgb(126, 210, 129);
  transition: width 0.3s ease;
}

.nav-link:hover::after {
  width: 100%;
}

</style>
</head>
<header>
  <nav class="navbar navbar-expand-lg" style="background-color: #3674B5;">
    <div class="container w-100 d-flex justify-content-between">
      <div class="">
        <a class="navbar-brand" href="https://smkpansa.sch.id/read/11/donor-darah-siswa-smk-pancasila-1-kutoarjo">
          <img src="http://smkpansa.sch.id/media_library/images/1468ab823038e7901c854e5445c8a664.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-center logo-glow ">
          <STrong>PANSA</STrong>
        </a>
      </div>
      <div class="">
        <ul class="navbar-nav justify-content-end nav-putih">
          <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>about">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>artikel">Kegiatan</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>galeri">Galeri</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
