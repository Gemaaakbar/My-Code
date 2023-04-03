<?php
require "koneksi.php";

$sql = "SELECT tb_tr_cpu.id_tr_cpu,
tb_tr_cpu.id_costumer, 
tb_costumer.nama_costumer,
tb_tr_cpu.id_cpu,
tb_cpu.jenis_cpu,
tb_tr_cpu.harga_cpu,
tb_tr_cpu.kuantitas,
tb_tr_cpu.total_pembayaran
FROM tb_costumer
INNER JOIN tb_tr_cpu ON tb_tr_cpu.id_costumer = tb_costumer.id_costumer
INNER JOIN tb_cpu ON tb_tr_cpu.id_cpu = tb_cpu.id_cpu
ORDER BY id_tr_cpu;";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction CPU List</title>
</head>
<body>
    <div class="judul">
        <h1>
            Transaction CPU List
        </h1>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Costumer Name</th>
            <th>CPU Name</th>
            <th>CPU Price</th>
            <th>CPU Quantity</th>
            <th>Total</th>
        </tr>
        <?php while
            ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $row['id_tr_cpu']?></td>
            <td><?= $row['nama_costumer']?></td>
            <td><?= $row['jenis_cpu']?></td>
            <td><?= $row['harga_cpu']?></td>
            <td><?= $row['kuantitas']?></td>
            <td><?= $row['total_pembayaran']?></td>
        <?php } ?>
        </tr>
    </table>
</body>
</html>