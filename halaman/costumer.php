<?php
require "koneksi.php";

$sql = "SELECT * FROM tb_costumer";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costumer List</title>
</head>
<body>
    <div class="judul">
        <h1>
            Costumer List
        </h1>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Type</th>
            <th>Size</th>
            <th>Frequensi</th>
        </tr>
        <?php while
            ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $row['id_costumer']?></td>
            <td><?= $row['nama_costumer']?></td>
            <td><?= $row['alamat_costumer']?></td>
            <td><?= $row['no_telp_costumer']?></td>
        <?php } ?>
        </tr>
    </table>
</body>
</html>