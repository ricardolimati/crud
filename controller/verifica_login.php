<?php
@session_start();
include_once '../model/Conexao.class.php';
include_once '../model/Login.class.php';

$login = new Login();

$login->verificaLogin('users', $_SESSION['ID']);

$qtde = 0;
foreach ($login->verificaLogin('users', $_SESSION['ID']) as $log) : 
  $qtde = $log['QTDE'];
endforeach;
if($qtde<1){
  header("Location: ../index.php?msg=VOCÊ NÃO TEM PERMISSÃO PARA ESSA PAGINA! FAÇA O LOGIN NOVAMENTE!");
}
