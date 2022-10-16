<?php

function GetBusiness(){
  include "db/db.php";
  $list=array();
  $query_bss = "SELECT * FROM info";  
  $select_bss_query = mysqli_query($connection, $query_bss);
  if (!$select_bss_query) die("QUERY FAILED! " . mysqli_error($connection));  
  while ($row = mysqli_fetch_array($select_bss_query)) {
    $db_bss_name = $row['name'];
    $db_bss_state = $row['state'];
    
    echo '<a href="" class="business col-2">';
    if($db_bss_state=='active'){
      echo '<div class="row title">';
      echo '<h3>'.strtoupper($db_bss_name).'</h3>';
      echo '</div>';
      echo '<div class="row">';
      echo '<p>Ingresos</p>';
      echo '<p>Gastos</p>';
      echo '<p>Deuda</p>';
      echo '<p>Capital</p>';
      echo '</div>';
    }
    else{
      echo '<div class="row title-disabled">';
      echo '<h3>'.strtoupper($db_bss_name).'</h3>';
      echo '</div>';
    }
    echo '</a>';
    
  }
}

?>