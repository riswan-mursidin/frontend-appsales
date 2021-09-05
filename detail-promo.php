<?php 
$id_promo = $_GET['page']; 
if($id_promo == ""){
  header('Location: promo');
}
include "header.php" 
?>
    <!-- header home -->
    <section id="headerpage">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-6 align-self-center">
            <h1>DETAIL PROMO</h1>
          </div>
          <div class="col-6 align-self-center">
            <h3><?= strtoupper($rowprofile['cabang']) ?></h3>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir header home -->

    <!-- Artikel Home -->
    <section id="artikel-home">
      <div class="container">
        <h5><?= $rowpromodetail['nama_event'] ?></h5>
        <hr />
        <div class="row artikel-home">
          <div class="col-12 col-sm-4 mt-3">
            <img src="<?= $rowpromodetail['foto_promo'] ?>" class="img-fluid" alt="" />
          </div>
          <div class="col-12 col-sm-8 mt-3">
            <p>
              <?= $rowpromodetail['desk'] ?>
            </p>
            <div class="col-12 mb-3 col-sm-4 info-lengkap">
              <a href="https://api.whatsapp.com/send?phone=62<?= $rowprofile['wa'] ?>&text=Halo, Saya ingin tahu info lebih lanjut tentang promo <?= $rowpromodetail['nama_event'] ?>">
                <p>AMBIL PROMO</p>
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
    <!-- Akhir Ambil Promo -->

   <?php include "footer.php" ?>