<?php
require "koneksi.php";

$sql = "SELECT * FROM tb_cpu";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cpu List</title>
</head>
<body>
    <div class="judul">
        <h1>
            CPU List
        </h1>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Brand</th>
            <th>Type</th>
            <th>Generation</th>
            <th>Frequensi</th>
            <th>Socket</th>
            <th>Price</th>
        </tr>
        <?php while
            ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $row['id_cpu']?></td>
            <td><?= $row['brand_cpu']?></td>
            <td><?= $row['jenis_cpu']?></td>
            <td><?= $row['gen_cpu']?></td>
            <td><?= $row['freq_cpu']?></td>
            <td><?= $row['jenis_motherboard']?></td>
            <td><?= $row['harga_cpu']?></td>
        <?php } ?>
        </tr>
    </table>
</body>
</html>