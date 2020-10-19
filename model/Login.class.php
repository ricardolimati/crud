<?php
/**
 * Esta classe de Login
 * 
 * @autor Ricardo Rodrigues de Lima <ricardodreamsites@gmail.com>
 * @versao 1.0
 * @copyright © 2020
 * 
 */

Class Login extends Conexao{
  public function getLogin($table, $login, $senha){
    $pdo = parent::get_instance();
    $sql = "SELECT * FROM $table WHERE login=:login AND senha=:senha LIMIT 1";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":login", $login);
    $statement->bindValue(":senha", $senha);
    $statement->execute();
    
    return $statement->fetchAll();

  }

  public function verificaLogin($table, $id){
    $pdo = parent::get_instance();
    $sql = "SELECT count(*) as QTDE FROM $table WHERE id=:id LIMIT 1";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();

    return $statement->fetchAll();
  }
}

 ?>