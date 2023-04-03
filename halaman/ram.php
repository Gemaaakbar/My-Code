<?php
require "koneksi.php";

$sql = "SELECT * FROM tb_ram";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ram List</title>
</head>

<body>
    <div class="judul">
        <h1>
            RAM List
        </h1>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Type</th>
            <th>Size</th>
            <th>Frequensi</th>
            <th>Brand</th>
            <th>Price</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $row['id_ram'] ?></td>
                <td><?= $row['jenis_ram'] ?></td>
                <td><?= $row['ukuran_ram'] ?></td>
                <td><?= $row['freq_ram'] ?></td>
                <td><?= $row['merek_ram'] ?></td>
                <td><?= $row['harga_ram'] ?></td>
            <?php } ?>
            </tr>
    </table>
</body>

</html>