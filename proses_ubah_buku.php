<?php
if ($_POST) {
    $id_buku = $_POST ["id_buku"];
    $nama_buku = $_POST ["nama_buku"];
    $pengarang = $_POST ["pengarang"];
    $deskripsi = $_POST ["deskripsi"];
    $foto = $_FILES ["foto"];
    
    include "koneksi.php";
                $update=mysqli_query($koneksi,"update buku set nama_buku='".$nama_buku."', pengarang='".$pengarang."', deskripsi='".$deskripsi."', foto='".$foto."'") or die(mysqli_error($koneksi));
                if ($update) {
                    echo "<script>alert('Sukses update buku');location.href='tampil.php';</script>";
                }
                else {
                    echo "<script>alert('Gagal update buku');location.href='ubah.php?id_buku=".$id_buku."';</script>";
                }
}
?>