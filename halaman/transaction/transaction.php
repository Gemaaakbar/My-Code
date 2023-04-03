<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Transaction List</title>
</head>
<body>
    <div class="judul">
        <h1>
            Transaction List
        </h1>
    </div>
    <div class="menu">
        <ul>
            <li><a href="transaction.php?page=home">HOME</a></li>
            <li><a href="transaction.php?page=ram">RAM Transaction</a></li>
            <li><a href="transaction.php?page=drive">Drive Transaction</a></li>
            <li><a href="transaction.php?page=cpu">CPU Transaction</a></li>
            <li><a href="https://localhost/pc/index.php">Back</a></li>
        </ul>
    </div>
    <div class="badan">
        <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];

                switch ($page) {
                    case 'home':
                      include "halaman/home.php";
                      break;
                    case 'ram':
                      include "halaman/tr_ram.php";
                      break;
                    case 'drive':
                      include "halaman/tr_drive.php";
                      break;
                    case 'cpu':
                      include "halaman/tr_cpu.php";
                      break;

                    default:
                      echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                      break;
                  }
                }
                else{
                  include "halaman/home.php";
                }
        ?>
    </div>
</body>
</html>