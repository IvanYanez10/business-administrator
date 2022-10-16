<?php
  session_start();
  if(!isset($_SESSION["user"])){
    header("location: http://localhost/business/");
  }
  include "functions.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">  <link rel="stylesheet" href="./static/customer-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="static/admin-style.css">
  <title>Dashboard | Negocios</title>
</head>
<body>
  <div class="content">

    <div class="col-2 quick">

      <h1>Negocios</h1>

      <div class="quick-view">
        <div class="row">
            <p>Capital</p>
            <p>$10,000.05</p>
        </div>
        <div class="row">
            <p>Deuda</p>
            <p>$10,000.05</p>
        </div>
        <div class="row">
            <p>Ingresos</p>
            <p>$10,000.05</p>
        </div>
        <div class="row">
            <p>Gastos</p>
            <p>$10,000.05</p>
        </div>
        <div class="row">
            <p>Inversion</p>
            <p>$10,000.05</p>
        </div>
        <div class="row">
            <p>IVA</p>
            <p>$10,000.05</p>
            <p>ISR</p>
            <p>$10,000.05</p>
        </div>
     </div>

      <div class="row user-data">
        <div class="col-2">
          <i class="fa-solid fa-user"></i>
        </div>
        <div class="col-8">
          <p>User</p>
          <p>Position</p>
        </div>
        <div class="col-2">
          <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
      </div>

    </div>

    <div class="col-9 bss-content">
      <div class="row">
        <?php GetBusiness();?>      
      </div>
    </div>
    

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>