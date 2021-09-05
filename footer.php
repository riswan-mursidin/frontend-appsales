        <!-- Footer -->
        <section id="footer" class="mt-3">
        <div class="container">
            <a class="img-fluid" href="https://galeriide.com">
            <span> support by galeriide.com</span></a
            >
        </div>
        </section>
        <!-- Akhir Footer -->
        <!-- Menu Footer -->
        <section id="menu-footer" class="fixed-bottom">
        <div class="container">
            <div class="row">
            <div class="d-flex flex-row text-center">
                <div class="col" style="background-color: #c40000">
                <a href="tel:<?= $rowprofile['wa'] ?>"
                    ><span class="material-icons"> phone_in_talk </span>
                    <p>TELPON</p></a
                >
                </div>
                <div class="col" style="background-color: green">
                <a href="https://api.whatsapp.com/send?phone=62<?= $rowprofile['wa'] ?>&text=Halo%20<?= $rowprofile['nama_sales'] ?>%20Saya%20ingin%20konsultasi%20mengenai%20produk%20<?= $rowprofile['cabang'] ?>,%20Info%20harga%20dan%20promo%20bulan%20ini"
                    ><span class="material-icons"> whatsapp </span>
                    <p>WHATSAPP</p></a
                >
                </div>
                <div class="col" style="background-color: orange">
                <a href="simulasi-kredit"
                    ><span class="material-icons"> calculate </span>
                    <p>SIMULASI KREDIT</p></a
                >
                </div>
                <div class="col" style="background-color: #520000">
                <a href="produk"
                    ><span class="material-icons"> directions_car_filled </span>
                    <p>DAFTAR PRODUK</p></a
                >
                </div>
            </div>
            </div>
        </div>
        </section>
        <!-- Akhir Menu footer -->
        <!-- Slider -->
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

        <!-- ColoR theme -->
        <script src="js/colorTheme.js"></script>
        <script src="js/splide.js"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->

        

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
