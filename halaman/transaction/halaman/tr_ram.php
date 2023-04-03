<?php
require "koneksi.php";

$sql = "SELECT tb_tr_ram.id_tr_ram,
tb_tr_ram.id_costumer, 
tb_costumer.nama_costumer,
tb_tr_ram.id_ram,
tb_ram.merek_ram,
tb_tr_ram.harga_ram,
tb_tr_ram.kuantitas,
tb_tr_ram.total_pembayaran
FROM tb_costumer
INNER JOIN tb_tr_ram ON tb_tr_ram.id_costumer = tb_costumer.id_costumer
INNER JOIN tb_ram ON tb_tr_ram.id_ram = tb_ram.id_ram
ORDER BY id_tr_ram;";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction RAM List</title>
</head>

<body>
    <div class="judul">
        <h1>
            Transaction RAM List
        </h1>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Costumer Name</th>
            <th>RAM Name</th>
            <th>RAM Price</th>
            <th>RAM Quantity</th>
            <th>Total</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $row['id_tr_ram'] ?></td>
                <td><?= $row['nama_costumer'] ?></td>
                <td><?= $row['merek_ram'] ?></td>
                <td><?= $row['harga_ram'] ?></td>
                <td><?= $row['kuantitas'] ?></td>
                <td><?= $row['total_pembayaran'] ?></td>
            <?php } ?>
            </tr>
    </table>
</body>

</html>