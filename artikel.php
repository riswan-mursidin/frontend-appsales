<?php include "header.php"; ?>
    
    <!-- Akhir Navbar -->
    <!-- Info -->
    <section id="carousel" style="background-color: #ffff;">
      <div class="container slider-wuling" >
        <div
          id="carouselExampleSlidesOnly"
          class="carousel slide img-fluid"
          data-bs-ride="carousel"
        >
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
        </div>
      </div>
    </section>

    <!-- Info Promo -->
    <section id="promo " style="background-color: #ffff;">
      <div class="container mt-3 mb-5 info-promo">
        <div class="row">
          <?php while($rowpromo = mysqli_fetch_assoc($querypromofull)){ ?>
          <div class="col-4 col-sm-6 artikel">
           
            <a href="detail-artikel?page=<?= $rowpromo['id_promo'] ?>"
              ><img src="<?= $rowpromo['foto_promo'] ?>" class="img-fluid shadow-sm" alt="artikel"
            /></a>
             <p class="judul-artikel"><?= $rowpromo['nama_event'] ?></p>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="container">
         <a href="https://api.whatsapp.com/send?phone=62<?= $rowprofile['wa'] ?>&text=Halo%20<?= $rowprofile['nama_sales'] ?>%20Saya%20ingin%20konsultasi%20mengenai%20produk%20<?= $rowprofile['cabang'] ?>,%20Info%20harga%20dan%20promo%20bulan%20ini"
        ><div class="col-12 hubungi-kami">
          <h6>Chat kami untuk info promo bulan ini</h6>
        </div></a
      >
      </div>
    </section>
    <!-- Akhir Info Promo -->

    <section id="footer">
      <div class="footer">
        <p>support by <a href="https://galeriide.com">galeriide.com</a></p>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="js/animationText.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
  </body>
</html>
<?php mysqli_close($conn) ?>