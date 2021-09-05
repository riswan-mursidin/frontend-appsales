<?php include "header.php" ?>

    <!-- header home -->
    <section id="headerpage">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-6 align-self-center">
            <h1>INFO PROMO</h1>
          </div>
          <div class="col-6 align-self-center">
            <h3><?= strtoupper($rowprofile['cabang']) ?></h3>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir header home -->
    <!-- carousel home -->
    <section id="carouselhome">
      <div class="container mt-3">
        <div id="slidehome" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
          <?php  
            $no = 0;
            while($row = mysqli_fetch_assoc($queryslider)){
              $no += 1;
              $hasil = $no == 1 ? 'active' : '';
            ?>
            <div class="carousel-item <?= $hasil ?>">
              <img 
                src="<?= $row['foto_slider'] ?>"
                class="d-block w-100"
                alt="banner<?= $no; ?>"
              />
            </div>
            <?php } ?>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#slidehome"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#slidehome"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- akhir carousel home -->
    <!-- Artikel Home -->
    <section id="artikel-home">
      <div class="container">
        <h5 class="mt-3">PROMO TERBARU</h5>
        <hr />
        <?php 
        $querypromoterbaru = mysqli_query($conn, "SELECT * FROM promo_mobil WHERE id_admin='14' ORDER BY id_promo DESC LIMIT 1");
        $rowpromoup = mysqli_fetch_assoc($querypromoterbaru) ?>
        <div class="row artikel-home">
          <div class="col-12 col-sm-4 mt-3">
            <img src="<?= $rowpromoup['foto_promo'] ?>" class="img-fluid" alt="" />
          </div>
          <div class="col-12 col-sm-8 mt-3">
            <h5><?= $rowpromoup['nama_event'] ?></h5>
            <p>
            <?= $rowpromoup['desk'] ?>
            </p>
            <div class="col-12 mb-3 col-sm-4">
              <a href="https://api.whatsapp.com/send?phone=62<?= $rowprofile['wa'] ?>&text=Halo, Saya ingin tahu info lebih lanjut tentang promo <?= $rowpromoup['nama_event'] ?>">
                <p class="info-lengkap">AMBIL PROMO</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Artikel Home -->
    <!-- Ambil Promo  -->
    <section id="ambil-promo">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12"><h5>DAFTAR PROMO OTO SALES</h5></div>
        </div>
      </div>
    </section>
    <!-- Akhir Ambil Promo -->
    <!-- Info Promo -->
    <section id="list-promo">
      <div class="container mt-3 mb-3">
        <div class="row">
        <?php while($rowpromo = mysqli_fetch_assoc($querypromofull)){ ?>
          <div class="col-6 mt-3">
            <h5><?= $rowpromo['nama_event'] ?></h5>
            <a href="detail-promo?page=<?= $rowpromo['id_promo'] ?>"
              ><img src="<?= $rowpromo['foto_promo'] ?>" class="img-fluid" alt="artikel"
            /></a>
          </div>
          <?php } ?>
        </div>
        <div class="justify-content-center mt-3">
          <div class="row">
            <a href="https://api.whatsapp.com/send?phone=62<?= $rowprofile['wa'] ?>&text=Halo%20<?= $rowprofile['nama_sales'] ?>%20Saya%20ingin%20konsultasi%20mengenai%20produk%20<?= $rowprofile['cabang'] ?>,%20Info%20harga%20dan%20promo%20bulan%20ini" class="tombol-info me-auto"
              ><div>
                <p>INFO PROMO</p>
              </div></a
            >
            <a href="kontak" class="tombol-kontak"
              ><div>
                <p>KONTAK <?= $rowprofile['nama_sales'] ?> </p>
              </div></a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Info Promo -->

    <?php include "footer.php" ?>
