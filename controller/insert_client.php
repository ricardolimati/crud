<?php
include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$maneger = new Manager();
$data = $_POST;

if(isset($data) && !empty($data)){
  $maneger->insertClient('registros', $data);
  header("Location: ../view/page_listclient.php?CLIENTE INSERIDO COM SUCESSO!");
}

?>
