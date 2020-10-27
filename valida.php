<?php   
session_start();
$login=$_POST["login"];
$senha=$_POST["senha"];


$conexao = mysqli_connect('localhost','root','12345678');
$banco = mysqli_select_db($conexao,'agenda');
mysqli_set_charset($conexao,'utf8');
 
$sql=mysqli_query($conexao,"select * from admin where login = '$login' and senha = '$senha'");



  if(mysqli_num_rows($sql) == 1)
         
          
	{

    $_SESSION["acesso"] = 1; ?>
    <script> window.location.href ='index.php'; </script> <?php
	}
	else
    {
   ?>  <script language="JavaScript">
         alert("Login ou Senha está incorreta");
         window.location = "javascript:history.go(-1);";
       </script> <?php
	  	mysql_close($db);
	}
?>









