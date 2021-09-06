<?php include "header.php" ?>
    <!-- header home -->
    <section id="headerpage">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-6 align-self-center">
            <h1>DAFTAR PRODUK</h1>
          </div>
          <div class="col-6 align-self-center">
            <h3><?= strtoupper($rowprofile['cabang']) ?></h3>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir header home -->

    <!-- Produk -->
    <div class="container produk-wuling">
      <div class="row mt-3">
      <?php while($rowmerek = mysqli_fetch_assoc($queryproduk)){ ?>
        <div class="col-6 mt-3">
          <img src="<?= $rowmerek['foto_merek'] ?>" class="img-fluid" alt="almaz" />
          <div class="judul-merek"><h5><?= $rowmerek['nama_merek'] ?></h5></div>
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
          <a href="detail-produk?merek=<?= $rowmerek['nama_merek'] ?>&no=<?= $rowmerek['id_merek'] ?>"
            ><div class="detail-judul-merek"><h5>DETAIL <?= $rowmerek['nama_merek'] ?></h5></div></a
          >
        </div>
        <?php } ?>
        <!-- share -->
        <div class="mt-3 mb-3">
          <h6>Bagikan info produk ini</h6>
          <div class="col-12 sharethis-inline-share-buttons"></div>
        </div>
      </div>
    </div>
    <!-- Akhir share -->
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
                $queryproduk = mysqli_query($conn, "SELECT * FROM merek_mobil WHERE id_admin='3'");
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
    <?php include "footer.php" ?>