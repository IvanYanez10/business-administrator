<?php
  session_start();
  $error='';

  include "admin/db/db.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user = $_POST['user'];
    $pass = $_POST['pass']; 
      
    $sql = "SELECT * FROM access WHERE user='$user' and pass='$pass'";
    $result = mysqli_query($connection, $sql);    
    $count = mysqli_num_rows($result);    

    if($count == 1) {
      $_SESSION['user'] = $user;
      if(isset($_SESSION["user"])) {
        header("location: http://localhost/business/admin");
      }  
    }else {
        $error = "Your Login Name or Password is invalid";
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
  <link rel="stylesheet" href="./static/style.css">
  <title>Negocios</title>
</head>
<body>  
  <div class="box">
    <h1>Hola</h1>
    <form role="form" method="post" action="">
      <div class="inputBox">
        <input type="text" class="form-control" placeholder="Usuario" aria-label="Username" name="user" autocomplete="off" required>
      </div>
      <div class="inputBox">
        <input type="password" class="form-control" placeholder="Contraseña" aria-label="pass"  name="pass" autocomplete="off" required>
      </div>
      <input type="submit" name="submit" value="Entrar">    
      <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
    </form>
  </div>  
  <div class="rights">
    <p>@2022 Todos los derechos reservados</p>
  </div>
</body>
</html>