<?php

session_start();
$connect = mysqli_connect("localhost","root","","asistente_virtual");

if(isset($_GET["cmd"])){
  $cmd = mysqli_real_escape_string($connect, $_GET["cmd"]);
  $sql = "SELECT * FROM respuestas WHERE  comando LIKE '%".$cmd."%'";
  $result = mysqli_query($connect, $sql);
  $num_row = mysqli_num_rows($result);
  if ($num_row != "") {
    $data = mysqli_fetch_array($result);
    echo $data["respuesta"].'-'.$data["tipo"];
  } else {
    echo ("disculpe no le puedo responder esto".'-'.'0');
  }
} 

?>
