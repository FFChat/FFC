<?php
require_once('model_base.php');

class general_chat extends modelBase {

  public function getAllMessage() {
    $sqlQuery = 'SELECT * FROM message';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute();
    return $recipesStatement->fetchAll();
  }

}