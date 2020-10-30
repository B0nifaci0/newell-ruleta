<?php

require "conecction.php";

echo  checknumber($mysqli);


function checknumber($mysqli){

  $sql = "SELECT  num FROM ruleta";
  $resultado = mysqli_query($mysqli, $sql);

  $no_participan = [];
  while($fila = mysqli_fetch_assoc($resultado)){
    array_push($no_participan, $fila['num']);
  }

  return json_encode($no_participan);

}
 