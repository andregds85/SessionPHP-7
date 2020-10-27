<?php
  session_start();
  $acesso = $_SESSION["acesso"];
  #echo
  $_SESSION['nome'];

  if (! $acesso){
   echo "<script> window.location.href ='login.html'; </script>";
   }
?>
