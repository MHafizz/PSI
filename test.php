<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php
        include 'koneksi.php';
        $cdate = date("y-m-d");
        $cdate2 =  date('Y-m-d', strtotime('-7 days', strtotime($cdate)));
        $obat = mysqli_query($koneksi, "SELECT * FROM obat");
        while($row = mysqli_fetch_array($obat)){
            echo"<tr>
            <th>".$row["ID_Obat"]."</th>
            <th>".$row["Nama_Obat"]."</th>
            <th>".$row["Harga_Satuan"]."</th>
            <th>".$cdate2."</th>
            </tr>";
        }
        ?>
    </table>
</body>
</html>