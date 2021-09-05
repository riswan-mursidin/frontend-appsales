<?php 
$id_merek = $_GET['no'];
if($id_merek == ""){
  header('Location: produk');
}
include "header.php"; 
?>
    <!-- header home -->
    <section id="headerpage">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-6 align-self-center">
            <h1><?= strtoupper($rowmerekdetail['nama_merek']) ?></h1>
          </div>
          <div class="col-6 align-self-center">
            <h3><?= strtoupper($rowprofile['cabang']) ?></h3>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir header home -->
    <!-- Video Produk -->
    <section id="type-detail-produk">
      <div class="container">
        <div class="row">
          <div class="col-12 mt-3">
            <iframe
              class="video-frame"
              src="https://www.youtube.com/embed/<?= $rowmerekdetail['link_yt'] ?>"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>

      <!-- Video Produk -->
      <!-- Type Produk -->

      <div class="container">
        <div class="row align-content-center">
          <div class="col-12 col-sm-6 mt-3 mb-3">
            <img src="<?= $rowmerekdetail['foto_merek'] ?>" class="img-fluid" alt="almaz" />
          </div>
          <div class="col-12 col-sm-6 mt-3">
            <div class="judul-merek"><h5><?= strtoupper($rowmerekdetail['nama_merek']) ?></h5></div>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">TYPE</th>
                  <th scope="col">HARGA RP.</th>
                </tr>
              </thead>
              <tbody>
                <?= showType($rowmerekdetail['id_merek']) ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!-- Type Produk -->
    <!-- Kredit -->
    <section id="kredit">
      <div class="container">
        <div class="row">
          <div class="col-12 mt-2 mb-2">
            <h5>Ingin menghitung Simulasi Kredit ?</h5>
          </div>
          <div class="col-12 mt-2 mb-2">
            <a href="#"
              ><div class="hitung-kredit">
                <h6>HITUNG SIMULASI KREDIT</h6>
              </div></a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- Kredit -->
    <!-- Highlight -->
    <section id="highlight">
      <div class="container">
        <div class="row">
          <div id="highlight" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#highlight"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#highlight"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#highlight"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
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
              data-bs-target="#carouselExampleCaptions"
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
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="col-12 mt-3">
            <h6>
            <?= $rowmerekdetail['desk_merek'] ?>
            </h6>
          </div>
        </div>
        <div class="row mt-3 mb-3">
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
    <!-- Akhir Highlight -->
    <!-- Pilih warna -->
    <section id="pilih-warna">
      <div class="container mt-3 mb-3">
        <div class="row">
          <div id="warna" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#warna"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#warna"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#warna"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
              <button
                type="button"
                data-bs-target="#warna"
                data-bs-slide-to="3"
                aria-label="Slide 4"
              ></button>
            </div>
            <div class="carousel-inner">
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
                        <div class="carousel-caption d-md-block">
                          <h5><?= $rowwarna['ket_warna'] ?></h5>
                        </div>
                    </div>
                    <?php ++$no; } ?>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#warna"
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
              data-bs-target="#warna"
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
        <!-- Spesifikasi -->
        <div class="col-12 spesifikasi mt-3 mb3">
          <div class="judul-merek"><h5>SPESIFIKSI</h5></div>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h5 class="accordion-header" id="flush-headingOne">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne"
                  aria-expanded="false"
                  aria-controls="flush-collapseOne"
                >
                  Spesifikasi Dimensi
                </button>
              </h5>
              <div
                id="flush-collapseOne"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
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
              </div>
            </div>
            <div class="accordion-item">
              <h5 class="accordion-header" id="flush-headingTwo">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo"
                  aria-expanded="false"
                  aria-controls="flush-collapseTwo"
                >
                  Spesifikasi Mesin
                </button>
              </h5>
              <div
                id="flush-collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
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
              </div>
            </div>
            <div class="accordion-item">
              <h5 class="accordion-header" id="flush-headingThree">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree"
                  aria-expanded="false"
                  aria-controls="flush-collapseThree"
                >
                  Spesifikasi Kaki-kaki
                </button>
              </h5>
              <div
                id="flush-collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
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
              </div>
            </div>
            <div class="accordion-item">
              <h5 class="accordion-header" id="flush-headingThree">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFour"
                  aria-expanded="false"
                  aria-controls="flush-collapseFour"
                >
                  Spesifikasi Pengereman
                </button>
              </h5>
              <div
                id="flush-collapseFour"
                class="accordion-collapse collapse"
                aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
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
        </div>
        <!-- Akhir Spesifikasi -->
      </div>
    </section>
    <!-- Sahare -->
    <div class="container mt-3 mb-3">
      <h6>Bagikan info produk ini</h6>
      <div class="col-12 sharethis-inline-share-buttons"></div>
    </div>
    <!-- Akhir share -->
    <?php include "footer.php" ?>