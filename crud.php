<?php
include "koneksi.php";

// Untuk masuk pada halaman Login
if(isset($_POST['login'])){
    if($_POST['user']=="manajer"){
        echo"<script>
                alert('Selamat datang Manager');
                document.location='index.php';
            </script>";
    }elseif($_POST['user']=="karyawan"){
        echo"<script>
                alert('Selamat datang Karyawan');
                document.location='Paymentss.php';
            </script>";
    }else{
        echo"<script>
                alert('User tidak terdaftar');
                document.location='login.php';
            </script>";
    }
}

// Tambah data ketika tombol simpan ditekan
if(isset($_POST['tambahObat'])){
    $query = "INSERT INTO `obat`(`ID_Obat`, `Nama_Obat`, `Harga_Satuan`, `Stok`, `kode_produksi`, `kadaluarsa`, `produsen`, `penyimpanan`, `id_apotek`) 
                VALUES ('NULL','$_POST[nama]','$_POST[harga]','$_POST[stok]','$_POST[kode]','$_POST[kadaluarsa]','$_POST[produsen]','$_POST[penyimpanan]', '$_POST[apotek]')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo"<script>
                alert('Tambah Data Sukses');
                document.location='tables.php';
            </script>";
    } else {
        echo "
        <script>
            alert('Tambah Data Gagal');
            document.location='obatKaryawan.php';
        </script>
        ";
    }
}

if(isset($_POST['restok'])){
    $query = "UPDATE obat SET 
        kode_produksi = '$_POST[kode]', Stok = '$_POST[stok]' WHERE Id_Obat = '$_POST[id]' ";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo"<script>
                alert('Edit Restok Sukses');
                document.location='tables.php';
            </script>";
    } else {
        echo "
        <script>
            alert('Edit Restok Gagal');
            document.location='index.php';
        </script>
        ";
    }
}

// Mengedit data ketika tombol edit ditekan
if(isset($_POST['ubah'])){
    $query = "UPDATE obat SET 
                Nama_Obat = '$_POST[nama]',
                produsen = '$_POST[produsen]',
                stok = '$_POST[stok]',
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

// Mengedit data toko apotek ketika tombol edit ditekan
if(isset($_POST['edit_apotek'])){
    $query = "UPDATE apotek SET 
                nama = '$_POST[nama_apotek]', alamat = '$_POST[alamat]',
                status = '$_POST[status]' WHERE id_apotek = '$_POST[id_apotek]' ";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo"<script>
                alert('Edit Data Sukses');
                document.location='store.php';
            </script>";
    } else {
        echo "
        <script>
            alert('Edit Data Gagal');
            document.location='store.php';
        </script>
        ";
    }
}

// Menghapus data toko apotek ketika tombol edit ditekan
if(isset($_POST['hapustoko'])){
    $query = "DELETE FROM apotek WHERE id_apotek = '$_POST[id]' ";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo"<script>
                alert('Hapus Data Sukses');
                document.location='store.php';
            </script>";
    } else {
        echo "
        <script>
            alert('Hapus Data Gagal');
            document.location='store.php';
        </script>
        ";
    }
}

// Tambah data ketika tombol simpan ditekan
if(isset($_POST['tambahToko'])){
    $query = "INSERT INTO `apotek`(`id_apotek`, `nama`, `status`, `alamat`) 
                VALUES ('NULL','$_POST[nama]','$_POST[status]','$_POST[alamat_toko]')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo"<script>
                alert('Tambah Data Sukses');
                document.location='store.php';
            </script>";
    } else {
        echo "
        <script>
            alert('Tambah Data Gagal');
            document.location='store.php';
        </script>
        ";
    }
}


?>