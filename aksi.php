<?php  
include "koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM profil_admin WHERE id_admin='3'");
$rowprofil=mysqli_fetch_assoc($query);
if(isset($_POST['aksikostumer'])){
    $nama = $_POST['nama'];
    $kota = $_POST['kota'];
    $no = $_POST['no'];
    $typemobil = $_POST['typemobil'];
    $permintaan = $_POST['permintaan'];
    $pesan = $_POST['pesan'];
    $querycostumer = "INSERT INTO costumer (nama_costumer,kota_costumer,no_costumer,typemobil_costumer,pesansingkat_costumer,pesan_costumer,id_admin) VALUES ('$nama','$kota','$no','$typemobil','$permintaan','$pesan','3')";
    if($result = mysqli_query($conn, $querycostumer)){
        header('Location: https://api.whatsapp.com/send?phone=62'.$rowprofil['wa'].'&text=Hai%20'.$rowprofil['nama_sales'].'%20,Perkenalkan%20Nama%20Saya%20'.$nama.'%20'.$no.',%20Saya%20mau%20tanyakan%20tentang%20'.$typemobil.'%20dan%20'.$permintaan.',%20'.$pesan);
    }
}
mysqli_close($conn);
?>