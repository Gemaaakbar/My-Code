<!DOCTYPE html>
<html lang="en">

<head>
  <title>Service PC</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="pc_icon.png" type="image/x-icon">
</head>

<body>
  <div class="navisa" id="myNavix">
    <a class="closebtn" href="javascript:void(0)" onclick="closeNav()">x</a>
    <a href="index.php?page=home">HOME</a>
    <a href="index.php?page=ram">RAM</a>
    <a href="index.php?page=drive">DRIVE</a>
    <a href="index.php?page=cpu">CPU</a>
    <a href="index.php?page=costumer">COSTUMER</a>
    <a href="index.php?page=service">SERVICE</a>
    <a href="index.php?page=transaction">TRANSACTION</a>
  </div>
  <div class="topnav">
    <button class="tnav" onclick="openNav()">&#8801;</button>
    <span class="thome"><a>WEBSITE SERVICE PC</a></span>
  </div>
  <nav class="navigation">
    <ul>
      <li><a href="#intro">Home</a></li>
      <li><a href="#explan">Pengertian</a></li>
      <li><a href="#type">Jenis</a></li>
    </ul>
  </nav>
  <div class="content">
    <div class="badan">
      <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
          case 'home':
            include "halaman/home.php";
            break;
          case 'ram':
            include "halaman/ram.php";
            break;
          case 'drive':
            include "halaman/drive.php";
            break;
          case 'cpu':
            include "halaman/cpu.php";
            break;
          case 'costumer':
            include "halaman/costumer.php";
            break;
          case 'service':
            include "halaman/service.php";
            break;
          case 'transaction':
            include "halaman/transaction.php";
            break;

          default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
        }
      } else {
        include "halaman/home.php";
      }
      ?>
    </div>
  </div>
  <script>
    function openNav() {
      document.getElementById("myNavix")
        .style.width = "300px";
    }

    function closeNav() {
      document.getElementById("myNavix")
        .style.width = "0";
    }
  </script>
</body>

</html>