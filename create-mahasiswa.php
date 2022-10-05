<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
	$nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    // buat query
    $sql = "INSERT INTO mahasiswa (nim, nama, alamat, jenis_kelamin) VALUE ('$nim', '$nama', '$alamat', '$jenis_kelamin')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil? 	
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang");
}

?>