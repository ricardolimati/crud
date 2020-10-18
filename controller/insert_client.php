<?php
include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$maneger = new Maneger();
$data = $_POST;

if(isset($data) && !empty($data)){
  $maneger->insertClient('registros', $data);
  header("Location: ../index.php?CLIENTE INSERIDO COM SUCESSO!");
}

?>
