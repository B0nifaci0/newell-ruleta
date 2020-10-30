<?php

require "conecction.php";
$number = $_GET['output'];
$premios = $_GET['premios'];
echo  checknumber($number, $premios, $mysqli);

function checknumber($number,$premios, $mysqli){

  $sql = "SELECT count(id) as num FROM ruleta WHERE num = $number";
  $resultado = mysqli_query($mysqli, $sql);
  $fila = mysqli_fetch_assoc($resultado);

  if($fila['num'] == 0){
    $sql = "INSERT INTO ruleta(num, premio) VALUES ('$number', '$premios')"; 
    //echo $sql;
    // die();
    $resultado = mysqli_query($mysqli, $sql);
    return "win";
  }else{
    return "loser";
  }


}

// Query to select an int column
// $query = 'SELECT num FROM ruleta';
// $result = mysql_query($query);
// $array = mysql_fetch_assoc($result);
//
// // Echoes: string
// echo gettype($array['num']);

 ?>
