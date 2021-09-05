<?php include "header.php"; ?>

    <!-- Akhir Navbar -->
    <!-- Info Kantor -->
    <section id="kantor">
      <div class="container mb-3 info-kantor">
        <div class="row">
          <div class="col-12">
            <h1><?= strtoupper($rowprofile['cabang']) ?></h1>
            <hr />
          </div>
          <div class="col-12 ">
            <p>
              <?= $rowprofile['alamat'] ?>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Info Kantor -->
    <!-- Carousel -->
    <section id="carousel">
      <div class="container-fluid slider-wuling">
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
    <!-- Akhir Carousel -->
    <!-- Info -->

    <section id="info">
      <div class="container info-wuling">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h1 class="mb-3 text-center welcome-text" ><?= $rowprofile['kata_sambutan'] ?></h1>
          </div>
          <div class="col-12 col-sm-6">
            <img
              src="<?= $rowprofile['foto_profil'] ?>"
              alt="profile"
              class="img-fluid mx-auto d-block rounded-1 shadow-sm"
              style="max-width: 250px"
            />
            <h5 class="mt-2 nama" style="color: red"><?= $rowprofile['nama_sales'] ?></h5>
            <p class="text-center"><?= $rowprofile['jabatan_sales'] ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-sm-6 text-center mt-3">
            <h6 class="text-center">
                <?= $rowprofile['perkenalan'] ?>
            </h6>
            <a
              href="https://api.whatsapp.com/send?phone=+62<?= $rowprofile['wa'] ?>&text=Halo%20<?= $rowprofile['nama_sales'] ?>%20Saya%20ingin%20konsultasi%20mengenai%20produk%20<?= $rowprofile['cabang'] ?>,%20Info%20harga%20dan%20promo%20bulan%20ini"
              ><img
                class="img-fluid mx-auto dblock justify-content-center"
                src="img/chat-wa.png"
                alt=""
            /></a>
          </div>

          <div class="col-12 col-sm-6 mt-3">
            <h6 class="text-center">Keunggulan Kami:</h6>
                <p class="text-center"><?= $rowprofile['keunggulan'] ?></p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fafafa"
          fill-opacity="1"
          d="M0,128L60,154.7C120,181,240,235,360,245.3C480,256,600,224,720,181.3C840,139,960,85,1080,69.3C1200,53,1320,75,1380,85.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- Akhir Info -->

    <!-- Produk -->
    <section id="produk">
      <div class="container mt-3 info-produk">
        <div class="row">
          <div class="col-6"><h6 style="color: red">Produk Wuling</h6></div>
          <div class="col-6 text-end">
            <a href="list-harga">List Harga>></a>
          </div>
        </div>
        <div class="row mt-2">
        <?php while($rowproduk=mysqli_fetch_assoc($queryproduk)){?>
          <div class="col-6 mb-2">
            <div class="card shadow-sm">
              <img
                src="<?= $rowproduk['foto_merek'] ?>"
                class="card-img-top img-fluid"
                alt="suv"
              />
              <form action="detail-produk?merek=<?= $rowproduk['nama_merek'] ?>" method="post" class="card-body">
                <h6 class="card-title"><?= $rowproduk['nama_merek'] ?></h6>
                <p class="card-text">Harga Mulai dari IDR <span style="color:red"> <?= number_format(showTypeharga($rowproduk['id_merek']),0,",",".") ?></span></p>
                <input type="hidden" name="id" value="<?= $rowproduk['id_merek'] ?>">
                <button class="btn btn-sm btn-danger">Lebih lengkap</button>
              </form>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>
    <!-- Akhir Produk -->
    <!-- Form Pesanan -->
    <section id="form-pesanan" class="mt-3">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 align-self-center mt-3">
            <img
              src="<?= $rowprofile['foto_profil'] ?>"
              alt="profile"
              class="img-fluid mx-auto d-block rounded-1 shadow-sm"
            />
            <h5 class="mt-2 nama" style="color: red"><?= $rowprofile['nama_sales'] ?></h5>
            <p class="text-center"><?= $rowprofile['jabatan_sales'] ?></p>
            <hr />
          </div>
          <form action="aksi.php" method='post' class="col-12 col-sm-6 mt-3 text-center">
            <h6>Konsultasikan kebutuhan anda :</h6>
            <div class="form-floating mb-3">
              <input
                type="text"
                name="nama"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
                required
              />
              <label for="floatingInput">Nama anda</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="text"
                name="kota"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
                required
              />
              <label for="floatingInput">Kota</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="text"
                name="no"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
                required
              />
              <label for="floatingInput">Nomor HP</label>
            </div>
            <select class="form-select" name="typemobil" aria-label="Default select example" required>
              <option selected>Type Mobil</option>
              <?php 
                $queryproduk = mysqli_query($conn, "SELECT * FROM merek_mobil WHERE id_admin='3'");
                while($rowproduk=mysqli_fetch_assoc($queryproduk)){
              ?>
                <option value="<?= $rowproduk['nama_merek'] ?>"><?= $rowproduk['nama_merek'] ?></option>
              <?php } ?>
            </select>
            <select class="form-select mt-3" name="permintaan" aria-label="Default select example" required>
              <option selected>Permintaan Info Lanjut</option>
              <option value="Test Drive">Test Drive</option>
              <option value="Kirim Brosur">Kirim Brosur</option>
              <option value="Perhitungan Kredit">Perhitungan Kredit</option>
              <option value="Dihubungi via telepon">Dihubungi via telepon</option>
              <option value="Kunjungan Sales">Kunjungan Sales</option>
              <option value="Trade-in / Tukar Tambah">Trade-in / Tukar Tambah</option>
              <option value="Lain lain">Lain lain</option>
            </select>
            <div class="form-floating mt-3">
              <textarea
                class="form-control"
                name="pesan"
                placeholder="Leave a comment here"
                id="floatingTextarea2"
                style="height: 100px"
                required
              ></textarea>
              <label for="floatingTextarea2">Pesan Tambahan</label>
            </div>
            <button class="col-12 mt-3 hubungi-kami" type="submit" name="aksikostumer"
              >
                <h6>Kirim Permintaan via Whatsapp</h6>
              
            </button>
          </form>
        </div>
      </div>
    </section>
    <!-- Akhir Form Pesanan -->
    <!-- Info Promo -->
    <section id="promo">
      <div class="container mt-5 info-promo">
        <div class="row">
          <div class="col-6"><h6 style="color: red">Info Promo</h6></div>
          <div class="col-6 text-end">
            <a href="artikel" class="detail">List Info >></a>
          </div>
        </div>
        <div class="row">
          <?php while($rowpromo = mysqli_fetch_assoc($querypromo)){ ?>
          <div class="col-6 artikel">
            <a href="detail-artikel?page=<?= $rowpromo['id_promo'] ?>"
              ><img src="<?= $rowpromo['foto_promo'] ?>" class="img-fluid shadow-sm" alt="artikel"
            /></a>
             <p style="margin-top:5px;"><?= $rowpromo['nama_event'] ?></p>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- Akhir Info Promo -->
    <section id="galeri">
      <div class="container mt-5 mb-3 info-galeri">
        <div class="row">
          <div class="col-6"><h6 style="color: red">GALERI</h6></div>
          <div class="col-6 text-end">
            <!-- <a href="#" class="detail">Galeri selengkapnya ></a> -->
          </div>
        </div>

        <div class="row mt-2">
          <div class="col">
            <div
              id="carouselExampleControls"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
              <?php  
              $no = 0;
              while($row = mysqli_fetch_assoc($querygaleri)){
                $no += 1;
                $hasil = $no == 1 ? 'active' : '';
              ?>
                <div class="carousel-item <?= $hasil ?>">
                  <img src="<?= $row['foto_galeri'] ?>" class="d-block w-100" alt="..." />
                </div>
              <?php } ?>
              </div>
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
        <a
          href="https://api.whatsapp.com/send?phone=+62<?= $rowprofile['wa'] ?>&text=Halo%20<?= $rowprofile['nama_sales'] ?>%20Saya%20ingin%20konsultasi%20mengenai%20produk%20<?= $rowprofile['cabang'] ?>,%20Info%20harga%20dan%20promo%20bulan%20ini"
          ><img
            class="img-fluid mx-auto d-block justify-content-center"
            src="img/chat-wa.png"
            alt=""
        /></a>
      </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#FF0000"
          fill-opacity="1"
          d="M0,128L60,154.7C120,181,240,235,360,245.3C480,256,600,224,720,181.3C840,139,960,85,1080,69.3C1200,53,1320,75,1380,85.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
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