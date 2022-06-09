<?php
  //TODO: Check if database exists if not first time config 
  //TODO: Check if no session exists if exists render index
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./static/style.css">
  <title>Empresa</title>
</head>
<body>
  <div class="box">
    <h1>Inicia sesion</h1>
    <form role="form" method="post" action="customer.php">
      <div class="inputBox">
        <input type="text" name="userID" autocomplete="off" required>
        <label>Usuario</label>
      </div>
      <div class="inputBox">
        <input type="password" name="userID" autocomplete="off" required>
        <label>Contraseña</label>
      </div>
      <input type="submit" name="submit" value="Entrar">      
    </form>
    <!--<a href="#" target="_blank">Ayuda</a>-->
  </div>
</body>
</html>