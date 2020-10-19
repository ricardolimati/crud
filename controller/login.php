<?php
session_start();
include_once '../model/Conexao.class.php';
include_once '../model/Login.class.php';

$login = new Login();

foreach ($login->getLogin("users", $_POST['login'], $_POST['senha']) as $log) : 
  $_SESSION["ID"] = $log["id"];
endforeach;

if(isset($_SESSION["ID"]) && !empty($_SESSION["ID"])){
  header("Location: ../view/page_listclient.php");
}else{
  header("Location: ../index.php?msg=LOGIN OU SENHA INCORRETO TENTE NOVAMENTE!");
}
?>
