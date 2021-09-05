<?php include "header.php" ?>
    
    

    <!-- header home -->
    <section id="headerhome">
      <div class="container">
        <div class="col">
          <h1><?= $rowprofile['kata_sambutan'] ?></h1>
        </div>
      </div>
    </section>
    <section id="kantor">
      <div class="container">
        <h3><?= strtoupper($rowprofile['cabang']) ?></h3>
        <p><?= $rowprofile['alamat'] ?></p>
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
    <!-- intro sales -->
    <section id="introsales">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 ms-auto">
            <img
              src="<?= $rowprofile['foto_profil'] ?>"
              class="img-fluid mx-auto d-block"
              alt="fotoSales"
            />
            <a href="kontak"
              ><div class="tombol-nama-sales">
                <p class="nama-sales"><?= $rowprofile['nama_sales'] ?></p>
                <p class="jabatan"><?= $rowprofile['jabatan_sales'] ?></p>
              </div></a
            >
          </div>
          <div class="col-12 col-md-8">
            <p>
              <?= $rowprofile['perkenalan'] ?>
            </p>
            <p>Keunggulan Kami:</p>
            <p>
            <?= $rowprofile['keunggulan'] ?>
            </p>
            <div class="row mt-3 mb-3">
              <a href="https://api.whatsapp.com/send?phone=62<?= $rowprofile['wa'] ?>&text=Halo <?= $rowprofile['nama_sales'] ?>, Boleh minta info promo bulan ini?" target="blank" class="tombol-info me-4"
                ><div>
                  <p>MINTA INFO PROMO</p>
                </div></a
              >
              <a href="kontak" class="tombol-kontak"
                ><div>
                  <p>KONTAK SALES</p>
                </div></a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir intro sales -->
    <!-- Produk -->
    <section id="daftar-produk">
      <div id="card-slider" class="container splide">
        <div class="splide__track">
          <ul class="splide__list">
            <?php while($rowproduk = mysqli_fetch_assoc($queryproduk)){?>
            <li class="splide__slide">
              <div class="m-2">
                <div class="daftar-produk">
                  <img
                    src="<?= $rowproduk['foto_merek'] ?>"
                    class="card-img-top"
                    alt="produk<?= $i += 0 ?>"
                  />
                  <div class="card-body">
                    <h4><?= $rowproduk['nama_merek'] ?></h4>
                    <p class="card-text">Harga mulai dari</p>
                    <h5 class="card-title">IDR <?= number_format(showTypeharga($rowproduk['id_merek']),0,",",".") ?></h5>
                    <a href="detail-produk?merek=<?= $rowproduk['nama_merek'] ?>&no=<?= $rowproduk['id_merek'] ?>"><p class="detail-produk">DETAIL</p></a>
                  </div>
                </div>
              </div>
            </li>
            <?php } ?>
          </ul>
          <div class="col-12 mt-3 mb-3">
            <a href="produk"
              ><p class="detail-produk">DAFTAR HARGA OTOSALES</p></a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Produk -->
    <!-- Form Buyer -->
    <section id="form-buyer">
      <div class="container form-buyer">
        <form action="aksi.php" method='post' class="row justify-content-center">
          <div class="col-12"><h5>KONSULTASIKAN KEBUTUHAN ANDA</h5></div>
          <div class="col-12 col-sm-5 form-floating mb-3 rounded-1 shadow-sm">
            <input
              type="text"
              name="nama"
              required
              class="form-control"
              id="floatingInput"
              placeholder="name"
            />
            <label for="floatingInput">Nama Anda</label>
          </div>
          <div class="col-12 col-sm-5 form-floating mb-3 rounded-1 shadow-sm">
            <input
              type="text"
              required
              name="kota"
              class="form-control"
              id="floatingPassword"
              placeholder="Password"
            />
            <label for="floatingPassword">Kota</label>
          </div>
          <div class="col-12 col-sm-5 form-floating mb-3 rounded-1 shadow-sm">
            <input
              type="text"
              name="no"
              required
              class="form-control"
              id="floatingInput"
              placeholder="name"
            />
            <label for="floatingInput">Whatsapp</label>
          </div>
          <div class="col-12 col-sm-5 form-floating mb-3 rounded-1 shadow-sm">
            <select class="form-select" aria-label="Default select example" name="typemobil" required>
              <option selected>Type mobil</option>
              <?php 
                $queryproduk = mysqli_query($conn, "SELECT * FROM merek_mobil WHERE id_admin='4'");
                while($rowproduk=mysqli_fetch_assoc($queryproduk)){
              ?>
                <option value="<?= $rowproduk['nama_merek'] ?>"><?= $rowproduk['nama_merek'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="col-12 col-sm-5 form-floating mb-3 rounded-1 shadow-sm">
            <select class="form-select" name="permintaan" aria-label="Default select example" required>
              <option selected>Permintaan Info</option>
              <option value="Test drive">Test drive</option>
              <option value="Kirim brosur">Kirim brosur</option>
              <option value="Perhitungan kredit">Perhitungan kredit</option>
              <option value="Dihubungi via telepon">Dihubungi via telepon</option>
              <option value="Kunjungan sales">Kunjungan sales</option>
              <option value="Trade-in / Tukar tambah">Trade-in / Tukar tambah</option>
              <option value="Lain lain">Lain lain</option>
            </select>
          </div>
          <div class="col-12 col-sm-5 form-floating mb-3 rounded-1 shadow-sm">
            <textarea
              class="form-control"
              required
              name="pesan"
              placeholder="Leave a comment here"
              id="floatingTextarea2"
            ></textarea>
            <label for="floatingTextarea2">Pesan Tambahan</label>
          </div>

          <div class="col-6 mb-3 kirim-form">
            <button type="submit" name="aksikostumer" style="text-decoration:none;border:0;background:none">
              <p>KIRIM PESAN</p>
            </button>
          </div>
        </form>
      </div>
    </section>
    <!-- Akhir Form Buyer -->
    <!-- Artikel Home -->
    <section id="artikel-home">
      <div class="container">
        <h5 class="mt-3">INFO OTOSALES</h5>
        <hr />
        <div class="row artikel-home">
        <?php while($rowpromo = mysqli_fetch_assoc($querypromo)){ ?>
          <div class="col-12 col-sm-4 mt-3">
            <img src="<?= $rowpromo['foto_promo'] ?>" class="img-fluid" alt="" />
          </div>
          <div class="col-12 col-sm-8 mt-3">
            <h5><?= $rowpromo['nama_event'] ?></h5>
            <p>
            <?= $rowpromo['desk'] ?></
            </p>
            <div class="col-12 mb-3 col-sm-4 ">
              <a href="detail-promo?page=<?= $rowpromo['id_promo'] ?>">
                <p class="info-lengkap">DETAIL</p>
              </a>
            </div>
          </div>
        <?php } ?>

          <div class="col-12 mt-3">
            <a href="promo"
              ><p class="detail-produk">DAFTAR INFO PROMO</p></a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Artikel Home -->
    <!-- Galeri Home -->
    <section id="galeri-home">
      <div class="container mt-3">
        <h5>GALERI OTOSALES</h5>
        <hr />
        <div id="galeri" class="carousel slide" data-bs-ride="carousel">
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
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#galeri"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#galeri"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="justify-content-center mt-3">
          <div class="row">
            <a href="https://api.whatsapp.com/send?phone=62<?= $rowprofile['wa'] ?>&text=Halo <?= $rowprofile['nama_sales'] ?>, Boleh minta info promo bulan ini?" target="blank" class="tombol-info me-4"
                ><div>
                  <p>MINTA INFO PROMO</p>
                </div></a
              >
              <a href="kontak" class="tombol-kontak"
                ><div>
                  <p>KONTAK SALES</p>
                </div></a
              >
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Galeri Home -->
    <!-- Tombol FLoat -->
    <!-- <div class="container tombol-float">
      <img src="img/chat-wa.png" alt="" />
    </div> -->

<?php include "footer.php" ?>