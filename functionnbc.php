<?php

//host web server
$host = "localhost";

//username
$username = "root";

// password
$password = "";

//nama db
$database = "direction";

// Koneksi ke database
$koneksi = mysqli_connect($host,$username,$password,$database);

// MENAMPILKAN NILAI TUNGGAL DARI KOLOM FITUR
function nilai_kolom($fitur){
    global $koneksi;
    $query = "SELECT DISTINCT $fitur FROM DATA_SET";
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

//MENGHITUNG JUMLAH NILAI KATEGORI YANG SESUAI DENGAN LABEL TERTENTU
function hitung_jumlah($fitur, $nilaifitur, $nilailabel){
    global $koneksi;
    $query = "SELECT COUNT($fitur) FROM data_set WHERE $fitur='$nilaifitur' AND obat = '$nilailabel'";
    $res = mysqli_query($koneksi, $query);
    $result = mysqli_fetch_row($res);
    return $result[0];
}

// MENGHITUNG JUMLAH LABEL 
function jumlah_label($nilailabel){
    global $koneksi;
    $query = "SELECT COUNT(obat) FROM data_set WHERE obat='$nilailabel'";
    $res = mysqli_query($koneksi,$query);
    $result = mysqli_fetch_row($res);
    return $result[0];
}

// MENGHITUNG BERAPA TOTAL NILAI LABEL
function total_label(){
    global $koneksi;
    $query = "SELECT COUNT(obat) FROM data_set";
    $res = mysqli_query($koneksi,$query);
    $result = mysqli_fetch_row($res);
    return $result[0];
}

?>