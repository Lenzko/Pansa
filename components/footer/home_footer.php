<head>
  <style>
    <style>
    .logo-hover {
  width: 100px;
  height: 100px;
  position: relative;
  overflow: hidden;
  display: inline-block;
  border-radius: 8px;
  transition: transform 0.3s ease-in-out;
}

.logo-hover:hover {
  transform: scale(1.05);
}

/* shimmer glowing effect */
.logo-hover::before {
  content: '';
  position: absolute;
  top: 0;
  left: -150%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    120deg,
    rgba(255, 255, 255, 0) 0%,
    rgba(255, 255, 255, 0.6) 50%,
    rgba(255, 255, 255, 0) 100%
  );
  transform: skewX(-20deg);
  opacity: 0.8;
}

.logo-hover:hover::before {
  animation: shimmer-bright 1s ease-in-out forwards;
}

@keyframes shimmer-bright {
  0% {
    left: -150%;
  }
  100% {
    left: 150%;
  }
}
  </style>
</head><footer style="background-color:rgb(127, 133, 149)" >
<div class="contianer-fluid bg-primary">
  <div class="container py-4">
    <div class="row text-white">
      <div class="col-md-4">
        <div class="row">
          <div class="col-4">
            <img src="http://smkpansa.sch.id/media_library/images/1468ab823038e7901c854e5445c8a664.png" alt="logo" class="img-fluid logo-hover" width="100" height="100">
          </div>
          <div class="col-6">
          <h5>SMK Pancasila 1 Kutoarjo</h5>
          <p>Jl. May. Jend. S. Parman Kutoarjo</p>
          </div>
        </div>
        
      </div>
      <div class="col-md-4">
        <h5>Kontak Kami</h5>
        <p>Email: 
          <a href="mailto:" class="text-white">
          smkpancasila1kta@gmail.com
          </a>
        </p>
        <p>Telepon: <a href="tel:0275641516" class="text-white">(027) 5641516</a></p>
      </div>
      <div class="col-md-4">
        <h5>Ikuti Kami</h5>
        <div>
          <a href="#" class="text-white me-2">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="#" class="text-white me-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="text-white me-2">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="text-white me-2">
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
  </div>
</div>
  </div>
</div>
<div class="text-center py-3">
  <p class="mb-0">&copy; <?= date('Y') ?> SMK Pancasila 1 Kutoarjo . All rights reserved.</p>
</div>
</div>
</footer>
