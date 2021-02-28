<?php 
include "koneksi.php";
?>
<?php
  $page = isset($_GET["page"]) ? $_GET["page"] : "beranda";
  if ($page == "logout"){
    unset($_SESSION["pengguna"]);
    session_destroy();
    header("location:../index.php");
  }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous"/>
 <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container">
      <h3><i class="fas fa-cart-plus text-success me-2"></i></h3>
        <a class="navbar-brand fw-bold" href="?page=dasboard">LapakShop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link active" href="?page=dashboard">Dashboard</a>
    </li>
     <li class="nav-item active">
    <a class="nav-link" href="?page=katalog">Katalog</a>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="?page=input">Input Barang</a>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="?page=logout">Logout</a>
    </li>

  </ul>
  </div>
  </div>
</nav>
 <?php
  include "koneksi.php";
  $page = isset($_GET["page"]) ? $_GET["page"] : "beranda"; 
    switch ($page) {
      case "katalog":
        include "katalog_admin.php";
        break;
      case "input":
        include "input.php";
        break;
      case "edit":
        include "edit.php";
        break;
      default:
        include "dashboard.php";
        break;
    }
?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>