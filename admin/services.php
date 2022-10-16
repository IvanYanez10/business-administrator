<?php
  //Check if DIR exists and cookie user set
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/style.css">
  <title>empresa</title>
</head>
<body>
  
<div class="row">
  <div class="grid col-2">
    <nav id="menu" class="left show sidebar ">
      <?php include "./content/parts/bar-side.php" ?>
    </nav>
  </div>
  <div class="grid col-10">
    <?php for($i=0; $i<50; $i++){ ?>
      <a data-modal="modal-one" class="service-card">
        <div class="">
          <p>ID</p>
          <p>Servicio <?= $i ?></p>
          <p>cost</p>
        </div>
      </a>
    <?php } ?>
  </div> 
</div>
    

</body>
</html>