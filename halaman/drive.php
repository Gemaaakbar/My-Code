<?php
require "koneksi.php";

$sql = "SELECT * FROM tb_drive";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive List</title>
</head>
<body>
    <div class="judul">
        <h1>
            Drive List
        </h1>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Type</th>
            <th>Brand</th>
            <th>Name</th>
            <th>Size</th>
            <th>Price</th>
        </tr>
        <?php while
            ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $row['id_drive']?></td>
            <td><?= $row['jenis_drive']?></td>
            <td><?= $row['brand_drive']?></td>
            <td><?= $row['nama_drive']?></td>
            <td><?= $row['ukuran_drive']?></td>
            <td><?= $row['harga_drive']?></td>
        <?php } ?>
        </tr>
    </table>
</body>
</html>