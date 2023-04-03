<?php
require "koneksi.php";

$sql = "SELECT tb_tr_drive.id_tr_drive,
tb_tr_drive.id_costumer, 
tb_costumer.nama_costumer,
tb_tr_drive.id_drive,
tb_drive.nama_drive,
tb_tr_drive.harga_drive,
tb_tr_drive.kuantitas,
tb_tr_drive.total_pembayaran
FROM tb_costumer
INNER JOIN tb_tr_drive ON tb_tr_drive.id_costumer = tb_costumer.id_costumer
INNER JOIN tb_drive ON tb_tr_drive.id_drive = tb_drive.id_drive
ORDER BY id_tr_drive;";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Drive List</title>
</head>

<body>
    <div class="judul">
        <h1>
            Transaction Drive List
        </h1>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Costumer Name</th>
            <th>Drive Name</th>
            <th>Drive Price</th>
            <th>Drive Quantity</th>
            <th>Total</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $row['id_tr_drive'] ?></td>
                <td><?= $row['nama_costumer'] ?></td>
                <td><?= $row['nama_drive'] ?></td>
                <td><?= $row['harga_drive'] ?></td>
                <td><?= $row['kuantitas'] ?></td>
                <td><?= $row['total_pembayaran'] ?></td>
            <?php } ?>
            </tr>
    </table>
</body>

</html>