<?php 
$id_promo = $_GET['page'];
if($id_promo == ""){
  echo "<script type='text/javascript'>document.location.href = 'artikel';</script>";
}
include "header.php"; 


?>


    <section id="promo ">
      <div class="container mb-5 info-promo">
        <div class="row">
          <div class="col-12 artikel">
            <a href="#"
              ><img src="<?= $rowpromodetail['foto_promo'] ?>" class="img-fluid" alt="artikel"
            /></a>
            <h1 class="mt-3"><?= $rowpromodetail['nama_event'] ?></h1>
            <hr />
            <p>
            <?= $rowpromodetail['desk'] ?>
          </p>
          </div>
        </div>
      </div>
       <div class="container mt-3 mb-5">
        <h6>Bagikan info promo ini</h6>
        <div class="col-12 sharethis-inline-share-buttons"></div>
    </div>

      <div class="container">
         <a href="https://api.whatsapp.com/send?phone=62<?= $rowprofile['wa'] ?>&text=Halo <?= $rowprofile['nama_sales'] ?>, saya ingin tahu info lebih lanjut tentang promo <?= $rowpromodetail['nama_event'] ?>"
        ><div class="col-12 hubungi-kami">
          <h6>Chat kami untuk info promo ini</h6>
        </div></a
      >
      <a href="artikel"
        ><div class="col-12 pilihan-produk">
          <h6>Liat info promo lainnya</h6>
        </div></a
      >
      </div>
    </section>
    <!-- Akhir Info Promo -->
   
    
    <section id="footer" class="mt-5" >
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