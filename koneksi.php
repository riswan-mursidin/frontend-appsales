<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "mobil";

$servername = "localhost";
$username = "u1438856_salesapp";
$password = "riswanboss9999";
$db = "u1438856_salesapp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// akun
$queryakun = mysqli_query($conn, "SELECT * FROM admin WHERE id_admin='26'");
$rowakun = mysqli_fetch_assoc($queryakun);

// profil
$queryprofil = mysqli_query($conn, "SELECT * FROM profil_admin WHERE id_admin='26'");
$rowprofile = mysqli_fetch_assoc($queryprofil);

//slider
$queryslider = mysqli_query($conn, "SELECT * FROM slider_home WHERE id_admin='26' ORDER BY id_slider ASC");



// produk
$queryproduk = mysqli_query($conn, "SELECT * FROM merek_mobil WHERE id_admin='26'");

// produk detail
$queryprodukdetail = mysqli_query($conn, "SELECT * FROM merek_mobil WHERE id_admin='26' AND id_merek='$id_merek'");
$rowmerekdetail = mysqli_fetch_assoc($queryprodukdetail);

// warna detail merek
$querywarna = mysqli_query($conn, "SELECT foto_warna FROM warna_merek WHERE id_merek='$rowmerekdetail[id_merek]' AND id_admin='26' ");

// function tampilkan harga type permerek
function showType($id){
    $servername = "localhost";
    $username = "u1438856_salesapp";
    $password = "riswanboss9999";
    $db = "u1438856_salesapp";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
    $querytype = mysqli_query($conn, "SELECT * FROM type_mobil WHERE id_merek='$id' AND id_admin='26'");
    while($rowtype = mysqli_fetch_assoc($querytype)){
    echo "<tr>
            <td>$rowtype[nama_type]</td>
            <td>".number_format($rowtype['harga_type'],2,",",".")."</td>
        </tr>";
    }
}

// function tampilkan harga type permerek
function showTypeharga($id){
    $servername = "localhost";
    $username = "u1438856_salesapp";
    $password = "riswanboss9999";
    $db = "u1438856_salesapp";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
    $querytype = mysqli_query($conn, "SELECT * FROM type_mobil WHERE id_merek='$id' AND id_admin='26' ORDER BY harga_type ASC LIMIT 1");
    $rowtype = mysqli_fetch_assoc($querytype);
    return $rowtype['harga_type'];
}

// info promo
$querypromo = mysqli_query($conn, "SELECT * FROM promo_mobil WHERE id_admin='26' ORDER BY id_promo DESC LIMIT 4");

// info promo full
$querypromofull = mysqli_query($conn, "SELECT * FROM promo_mobil WHERE id_admin='26' ORDER BY id_promo DESC");

// info promo detail
$querypromodetail = mysqli_query($conn, "SELECT * FROM promo_mobil WHERE id_promo='$id_promo' AND id_admin='26'");
$rowpromodetail = mysqli_fetch_assoc($querypromodetail);
// galeri
$querygaleri = mysqli_query($conn, "SELECT * FROM galeri_sales WHERE id_admin='26' LIMIT 10");

// highlight
$queryhigh = mysqli_query($conn, "SELECT * FROM highlight_mobil WHERE id_merek='$rowmerekdetail[id_merek]' AND id_admin='26' ");

// spesifikasi dimensi
$querydimensi = mysqli_query($conn, "SELECT * FROM detail WHERE id_merek='$id_merek' AND id_kategori='1' AND id_admin='26'");

// spesifikasi mesin
$querymesin = mysqli_query($conn, "SELECT * FROM detail WHERE id_merek='$id_merek' AND id_kategori='2' AND id_admin='26'");

// spesifikasi kaki
$querykaki = mysqli_query($conn, "SELECT * FROM detail WHERE id_merek='$id_merek' AND id_kategori='3' AND id_admin='26'");

// spesifikasi rem
$queryrem = mysqli_query($conn, "SELECT * FROM detail WHERE id_merek='$id_merek' AND id_kategori='4' AND id_admin='26'");
?>