
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



