<?php include "header.php" ?>
    <!-- header home -->
    <section id="headerpage">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-6 align-self-center">
            <h1>SIMULASI KREDIT</h1>
          </div>
          <div class="col-6 align-self-center">
            <h3><?= strtoupper($rowprofile['cabang']) ?></h3>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir header home -->
    <!-- simulasi kredit -->
    <!-- akhir simulasi kredit -->
    <section id="simulasi-kredit">
      <form name="form" class="container">
        <div class="row ">
          <div class="col-12 mt-3 justify-content-center mb-3">
            <h5>Simulasi kredit</h5>
            <p>
              Kami juga menyediakan alat simulasi kredit agar anda bisa
              merencanakan kredit kendaraan anda dengan kami. Simulasi ini untuk
              mengetahui gambaran angsuran atau cicilan anda tiap bulannya
            </p>
            <p style="font-size: smaller">
              *Perhitungan simulasi ini tidak bersifat mengikat dan dapat
              berbeda dengan perhitungan di setiap dealer.
            </p>
            <p>Silahkan mengisi form dibawah ini dengan benar.</p>
          </div>
          <div class="col-12 col-md-6 mb-3">
                    <select class="form-select" name="harga">
                        <option selected>Pilih Produk</option>
                        <?php  
                        while($rowmerek = mysqli_fetch_assoc($queryproduk)){
                        ?>
                        <optgroup label="<?= $rowmerek['nama_merek'] ?>">
                            <?= showType2($rowmerek['id_merek']) ?>
                        </optgroup>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" >Rp. </span>
                        <input type="number" step="0.01" class="form-control" placeholder="Uang Muka (dalam Rupiah)" name="muka">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group mb-3">
                      <select class="form-select" name="jangka" >
                        <option selected>Jangka waktu pembayaran</option>
                        <option value="1">TENOR: 1 TAHUN</option>
                        <option value="2">TENOR: 2 TAHUN</option>
                        <option value="3">TENOR: 3 TAHUN</option>
                        <option value="4">TENOR: 4 TAHUN</option>
                        <option value="5">TENOR: 5 TAHUN</option>
                        <option value="6">TENOR: 6 TAHUN</option>
                      </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="input-group mb-3">
                        <input type="number" step="0.01" class="form-control" placeholder="Suku Bunga Per tahun" name="bunga">
                        <span class="input-group-text" >%</span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col mb-3">
                    <input type="button" onclick="hasilHitung()" class="btn btn-danger btn-save" value="HITUNG ANGSURAN" style="font-size:smaller">
                    </div>
                    <div class="col mb-3">
                    <button type="reset" class="btn btn-warning btn-save" style="font-size:smaller">RESET HITUNGAN</button>
                    </div>
                </div>
            </div>
            <div id="myDIV">
                <h6 class="mt-3">Hasil</h6>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-12 mb-3">
                    <label for="">Harga Mobil Dipotong Dp</label>
                    <input class="form-control" type="text" name="pinjam" placeholder="Rp. 0.00" aria-label="Disabled input example" disabled>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="">Uang muka yang harus dibayar</label>
                    <input class="form-control" type="text" name="uangmukatotal" placeholder="Rp. 0.00" aria-label="Disabled input example" disabled>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="">Angsuran Perbulan</label>
                    <input class="form-control" type="text" name="angsuran" placeholder="Rp. 0.00" aria-label="Disabled input example" disabled>
                </div>
                
        </div>
      </form>
      <!-- Hasil Hitungan -->
      <!-- Button trigger modal -->
        
      <!-- Akhir Hasil Hitungan -->
    </section>
    <!-- Akhir Simulasi Keredit -->
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
    <script>
        function formatMoney(n) {
            return "Rp. " + (Math.round(n * 100) / 100).toLocaleString();
        }
        function hasilHitung(){
            // ambil nilai input
            uangmuka = parseInt(form.muka.value);
            pinjam = parseInt(form.harga.value);
            waktu = parseInt(form.jangka.value);
            persen = parseFloat(form.bunga.value);
            // perhitungan
            angsuran = pinjam - uangmuka;
            perwaktu = angsuran / (waktu * 12);
            bunga = (angsuran * (persen / 100)) / 12;
            n = perwaktu + bunga;
            j = uangmuka + n;
            // hasil
            form.pinjam.value = formatMoney(angsuran);
            form.uangmukatotal.value = formatMoney(j);
            form.angsuran.value = formatMoney(n);
        }
    </script>

    <?php include "footer.php" ?>