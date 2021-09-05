<?php include "header.php" ?>
    <!-- header home -->
    <section id="headerpage">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-6 align-self-center">
            <h1>KONTAK SALES</h1>
          </div>
          <div class="col-6 align-self-center">
            <h3><?= strtoupper($rowprofile['cabang']) ?></h3>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir header home -->
    <!-- kontak -->
    <section id="kontak">
      <div class="container mt-3 mb-3">
        <div class="row justify-content-center">
          <div class="col-12 col-md-5">
            <img src="<?= $rowprofile['foto_profil'] ?>" class="img-fluid" alt="cs" />
            <div class="tombol-nama-sales">
              <p class="nama-sales"><?= $rowprofile['nama_sales'] ?></p>
              <p class="jabatan"><?= $rowprofile['jabatan_sales'] ?></p>
            </div>
          </div>
          <div class="col-12 mt-3">
            <p><?= $rowprofile['bio'] ?></p>
            <p>---</p>
            <p>Klik salah satu tombol dibawah ini untuk menghubungi kami :</p>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-12 col-sm-6 mt-2">
            <a href="https://api.whatsapp.com/send?phone=62<?= $rowprofile['wa'] ?>"
              ><div class="btn-whatsapp">
                <h5>WHATSAPP</h5>
              </div></a
            >
          </div>
          <div class="col-12 col-sm-6 mt-2">
            <a href="https://www.instagram.com/<?= $rowprofile['ig'] ?>"
              ><div class="btn-instagram">
                <h5>INSTAGRAM</h5>
              </div></a
            >
          </div>
          <div class="col-12 col-sm-6 mt-2">
            <a href="https://www.facebook.com/<?= $rowprofile['fb'] ?>"
              ><div class="btn-facebook">
                <h5>FACEBOOK</h5>
              </div></a
            >
          </div>
          <div class="col-12 col-sm-6 mt-2">
            <a href="index"
              ><div class="btn-website">
                <h5>WEBSITE</h5>
              </div></a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- akhir kontak -->
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
                $queryproduk = mysqli_query($conn, "SELECT * FROM merek_mobil WHERE id_admin='26'");
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
    <?php include "footer.php" ?>