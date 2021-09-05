<?php 
$id_merek = $_POST['id'];
include "header.php"; 
if(!isset($_POST['id'])){
  header('Location: index');
}

?>
    <!-- Akhir Navbar -->
    <!-- Table Detail Produk  -->
    <div class="container detail-produk">
      <h5 class="text-center">WULING <?= strtoupper($rowmerekdetail['nama_merek']) ?></h5>
      <hr />
      <div class="row mt-3">
        <div class="col-12">
          <iframe
            class="video-frame"
            src="https://www.youtube.com/embed/<?= $rowmerekdetail['link_yt'] ?>"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>

        <div class="col-12 mt-3">
          <img src="<?= $rowmerekdetail['foto_merek'] ?>" class="img-fluid mx-auto d-block" alt="almaz" />
          <div class="judul-merek"><h6>LIST HARGA <?= $rowmerekdetail['nama_merek'] ?></h6></div>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">TYPE</th>
                <th scope="col">HARGA RP.</th>
              </tr>
            </thead>
            <tbody>
              <?php echo showType($rowmerekdetail['id_merek']) ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Section -->
    <!--Info Highlight-->
    <section id="galeri">
        <div class="container">
        <div class="mt-3 mb-3">
          <div class="row mt-2">
            <h6 class="mb-3 text-center">HIGHLIGHT <?= strtoupper($rowmerekdetail['nama_merek']) ?></h6>
            <div class="col">
              <div
                id="carouselExampleControlshigh"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner warna-produk">
                    <?php  
                    $no = 0;
                    while($rowhigh = mysqli_fetch_assoc($queryhigh)){
                    ?>
                    <div class="carousel-item <?= $hasil = $no == 0 ? 'active' : '' ?>">
                        <img
                        src="<?= $rowhigh['foto_highlight'] ?>"
                        class="d-block w-100"
                        alt="..."
                        />
                        <div class="carousel-caption ">
                          <h6 style="margin-bottom:-20px;"><?= $rowhigh['nama_highlight'] ?></h6>
                        </div>
                    </div>
                    <?php ++$no; } ?>
                </div>
                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExampleControlshigh"
                  data-bs-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExampleControlshigh"
                  data-bs-slide="next"
                >
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
         </div>
        </div>
      </section>
    <!--Akhir Highlight-->

    <section id="bio-dataproduk">
      <div class="container col-12">
        <p>
        <?= $rowmerekdetail['desk_merek'] ?>
        </p>
      </div>
    </section>
    
  <div class="container col-12 mt-5">
    <div class="container">
      <div class="row">
        
         <div class="col-12 hubungi-kami"> 
            <a style="color:#fff;" href="https://api.whatsapp.com/send?phone=62<?= $rowprofile['wa'] ?>&text=Halo%20<?= $rowprofile['nama_sales'] ?>%20saya%20ingin%20tahu%20info%20promo%20mengenai%20<?=  $rowmerekdetail['nama_merek'] ?>,%20bulan%20ini">
                <h6>Info Promo Klik Disini</h6>
            </a>
         </div>

         <div class="col-12 pilihan-produk"> 
            <a style="color:#fff;" href="list-harga">
                <h6>List Harga Wuling Lainnya</h6>
            </a> 
         </div>

      </div>
    </div>
      <section id="galeri">
        <div class="mt-3 mb-3">
          <div class="row mt-2">
            <h6 class="mb-3 text-center">PILIHAN WARNA</h6>
            <div class="col">
              <div
                id="carouselExampleControls"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-inner warna-produk">
                    <?php  
                    $no = 0;
                    while($rowwarna = mysqli_fetch_assoc($querywarna)){
                    ?>
                    <div class="carousel-item <?= $hasil = $no == 0 ? 'active' : '' ?>">
                        <img
                        src="<?= $rowwarna['foto_warna'] ?>"
                        class="d-block w-100"
                        alt="..."
                        />
                    </div>
                    <?php ++$no; } ?>
                </div>
                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="next"
                >
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion mt-3" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button btn-edit" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Lihat Detail Spesifikasi
        </button> </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
         <div class="accordion-body">
          <div class="col-12 mt-5">
          <div class="judul-merek"><h6>SPESIFIKASI DIMENSI</h6></div>
          <table class="table table-striped table-hover">
            <tbody>
              <?php while($rowdimensi = mysqli_fetch_assoc($querydimensi)){ ?>
              <tr>
                <th><?= $rowdimensi['nama_field'] ?></th>
                <td><?= $rowdimensi['value_field'] ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

        <div class="col-12 mt-5">
          <div class="judul-merek"><h6>SPESIFIKASI MESIN</h6></div>
          <table class="table table-striped table-hover">
            <tbody>
              <?php while($rowmesin = mysqli_fetch_assoc($querymesin)){ ?>
              <tr>
                <th><?= $rowmesin['nama_field'] ?></th>
                <td><?= $rowmesin['value_field'] ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

        <div class="col-12 mt-5">
          <div class="judul-merek"><h6>SPESIFIKASI KAKI</h6></div>
          <table class="table table-striped table-hover">
            <tbody>
              <?php while($rowkaki = mysqli_fetch_assoc($querykaki)){ ?>
              <tr>
                <th><?= $rowkaki['nama_field'] ?></th>
                <td><?= $rowkaki['value_field'] ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

        <div class="col-12 mt-5">
          <div class="judul-merek"><h6>PENGEREMAN</h6></div>
          <table class="table table-striped table-hover">
            <tbody>
              <?php while($rowrem = mysqli_fetch_assoc($queryrem)){ ?>
              <tr>
                <th><?= $rowrem['nama_field'] ?></th>
                <td><?= $rowrem['value_field'] ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
   </div>
    </div>
     </div>
      </section>
    </div>
    <div>
         <a
          href="https://api.whatsapp.com/send?phone=+62<?= $rowprofile['wa'] ?>&text=Halo%20<?= $rowprofile['nama_sales'] ?>%20Saya%20ingin%20konsultasi%20mengenai%20produk%20<?= $rowprofile['cabang'] ?>,%20Info%20harga%20dan%20promo%20bulan%20ini"
          ><img
            class="img-fluid mx-auto d-block justify-content-center"
            src="img/chat-wa.png"
            alt=""
        /></a>
    </div>
    

    <!-- Table Detail Produk -->

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