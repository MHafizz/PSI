<?php
include "koneksi.php";

// Mengedit data ketika tombol edit ditekan
if(isset($_POST['ubah'])){
    $query = "UPDATE obat SET 
                Nama_Obat = '$_POST[nama]',
                produsen = '$_POST[produsen]',
                Harga_Satuan = '$_POST[harga]' WHERE Id_Obat = '$_POST[id]' ";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo"<script>
                alert('Edit Data Sukses');
                document.location='tables.php';
            </script>";
    } else {
        echo "
        <script>
            alert('Edit Data Gagal');
            document.location='index.php';
        </script>
        ";
    }
}

// Menghapus data ketika tombol edit ditekan
if(isset($_POST['hapus'])){
    $query = "DELETE FROM obat WHERE Id_Obat = '$_POST[id]' ";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo"<script>
                alert('Hapus Data Sukses');
                document.location='tables.php';
            </script>";
    } else {
        echo "
        <script>
            alert('Hapus Data Gagal');
            document.location='index.php';
        </script>
        ";
    }
}



?>