<?php
  //TODO: Check if database exists if not first time config 
  //TODO: Check if session exists if not login page
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./static/style.css">
  <title>empresa</title>
</head>
<body>
  <div class="box">
    <h1>empresa</h1>
    <form role="form" method="post" action="customer.php">
      <div class="inputBox">
        <input type="text" name="userID" autocomplete="off" required>
        <label>usuario</label>
      </div>
      <div class="inputBox">
        <input type="text" name="userID" autocomplete="off" required>
        <label>contraseña</label>
      </div>
      <input type="submit" name="submit" value="Ingresar">      
    </form>
    <p>Tienes # oportunidades</p>
  </div>
</body>
</html>