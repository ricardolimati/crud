<?php
include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$manager = new Manager();

$id = $_POST['id'];

if(isset($id) && !empty($id)){
  $manager->deleteClient('registros', $id);
  header("Location: ../view/page_listclient.php?CLIENTE DELETADO!");
}

?>