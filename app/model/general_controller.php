<?php
require_once('model_base.php');

class general_controller extends modelBase {

  public function getAllUsers() {
    $sqlQuery = 'SELECT nickname FROM user';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute();
    return $recipesStatement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getAccessibleChanels($id) {
    $sqlQuery = 'SELECT name, id FROM channel join user_channel_access   on channel.id=user_channel_access.channel_id where user_channel_access.user_id= ? ';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute([$id]);
    return $recipesStatement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getChild($id) {
    $sqlQuery = 'SELECT name, id FROM channel where parent = ? ';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute([$id]);
    return $recipesStatement->fetchAll(PDO::FETCH_ASSOC);
  }

}