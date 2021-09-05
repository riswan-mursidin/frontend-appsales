<?php include "header.php"; ?>
<!-- Kontak -->
    <div class="container kontak">
      <div class="row">
        <div class="col-12 text-center">
          <img
            src="<?= $rowprofile['foto_profil'] ?>"
            class="mx-auto d-block shadow-sm img-fluid"
            alt="cs"
          />
          <h5 class="mt-3"><?= $rowprofile['nama_sales'] ?></h5>
          <p>
            <?= $rowprofile['bio'] ?> <br />
          </p>
          <p style="margin-top:-10px;margin-bottom:-10px;" >---</p>
          <p> Klik salah satu tombol dibawah ini untuk menghubungi kami</p>
        </div>
        <div class="col-12"></div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <a href="https://api.whatsapp.com/send?phone=62<?= $rowprofile['wa'] ?>&text=Hai%20<?= $rowprofile['nama_sales'] ?>,%20saya%20dapat%20info%20kontak%20dari%20website%20<?= $rowprofile['cabang'] ?>,%20Mohon%20info%20lebih%20lanjut.">
            <button class="btn whatsapp">
              <em class="fa fa-whatsapp"></em>Whatsapp
            </button></a
          >
        </div>
        <div class="col-sm-6">
          <a href="https://www.instagram.com/<?= $rowprofile['ig'] ?>"
            ><button class="btn instagram">
              <em class="fa fa-instagram"></em>Instagram
            </button></a
          >
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <a href="https://www.facebook.com/<?= $rowprofile['fb'] ?>"
            ><button class="btn facebook">
              <em class="fa fa-facebook"></em>Facebook
            </button></a
          >
        </div>
        <div class="col-sm-6">
          <a href="https://<?= $rowakun['domain'] ?>">
            <button class="btn website">
              <em class="fa fa-globe"></em>Website
            </button></a
          >
        </div>
      </div>
    </div>
    <section id="form-pesanan" class="mt-3">
      <div class="container">
        <div class="row justify-content-center">
          
          <form action="aksi.php" method='post' class="col-12 col-sm-6 mt-3 text-center">
            <h6>Konsultasikan kebutuhan anda :</h6>
            <div class="form-floating mb-3">
              <input
                type="text"
                name="nama"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
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
              />
              <label for="floatingInput">Nomor HP</label>
            </div>
            <select class="form-select" name="typemobil" aria-label="Default select example">
              <option selected>Type Mobil</option>
              <?php 
                while($rowproduk=mysqli_fetch_assoc($queryproduk)){
              ?>
                <option value="<?= $rowproduk['nama_merek'] ?>"><?= $rowproduk['nama_merek'] ?></option>
              <?php } ?>
            </select>
            <select class="form-select mt-3" name="permintaan" aria-label="Default select example">
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
    <!-- Akhir Kontak -->
    <section id="galeri">
      <div class="container mt-3 mb-3 info-galeri">
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