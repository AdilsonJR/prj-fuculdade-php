<?php 

session_start();
 
// muda o valor de logged_in para false
$_SESSION['logged_in'] = false;
 
// finaliza a sessão
session_destroy();
 
// retorna para a index.php
// header('Location: index.php');
header("location:./../../index.php"); //to redirect back to "index.php" after logging out
exit();

