<?php include "header.php"; ?>
    <!-- Akhir Navbar -->
    <!-- Produk -->
    <div class="container produk-wuling">
      <h5>LIST HARGA PRODUK WULING</h5>
      <hr />
      <div class="row mt-3">
      <?php while($rowmerek = mysqli_fetch_assoc($queryproduk)){ ?>
      <div class="col-6 mt-3">
          <img src="<?= $rowmerek['foto_merek'] ?>" class="img-fluid" alt="almaz" />
          <div class="judul-merek"><h6><?= $rowmerek['nama_merek'] ?></h6></div>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">TYPE</th>
                <th scope="col">HARGA RP.</th>
              </tr>
            </thead>
            <tbody>
              <?php echo showType($rowmerek['id_merek']) ?>
            </tbody>
          </table>
        </div>
        <?php } ?>
      </div>
    </div>
    <!-- Akhir Produk -->
    <div class="container mt-3 mb-5">
        <h6>Bagikan info promo ini</h6>
        <div class="col-12 sharethis-inline-share-buttons"></div>
    </div>
    <!--
    <div class="container">
      <a href="#"
        ><div class="judul-merek mt-2">
          <h6>DONWLOAD BROSUR LENGKAP</h6>
        </div></a
      >
    </div>
    -->
    <!-- Info -->

    <section id="info">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fafafa"
          fill-opacity="1"
          d="M0,128L60,154.7C120,181,240,235,360,245.3C480,256,600,224,720,181.3C840,139,960,85,1080,69.3C1200,53,1320,75,1380,85.3L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
        ></path>
      </svg>
      <div class="container info-wuling">
        <div class="row">
          <div class="col-12 col-sm-6 align-self-center mt-3">
            <img
              src="<?= $rowprofile['foto_profil'] ?>"
              alt="profile"
              class="img-fluid mx-auto d-block rounded-1 shadow-sm"
              style="max-width: 250px"
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
                required
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
                required
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Kota</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="text"
                required
                name="no"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Nomor HP</label>
            </div>
            <select class="form-select" name="typemobil" aria-label="Default select example" required>
              <option selected>Type Mobil</option>
              <?php
                $queryproduk = mysqli_query($conn, "SELECT * FROM merek_mobil WHERE id_admin='26'");
                while($rowmerek = mysqli_fetch_assoc($queryproduk)){
              ?>
                <option value="<?= $rowmerek['nama_merek'] ?>"><?= $rowmerek['nama_merek'] ?></option>
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
                required
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

    <!-- Akhir Info -->

    <section id="footer">
      <div class="footer">
        <p>support by <a href="#">galeriide.com</a></p>
      </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<?php mysqli_close($conn) ?>