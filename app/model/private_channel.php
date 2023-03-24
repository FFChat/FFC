<?php
require_once('model_base.php');

class private_channel extends modelBase {

  public function getAccesChilds(int $id_channel, int $id_user) {
    $sqlQuery = 'SELECT id FROM channel WHERE id= ? and parent = (SELECT channel_id FROM user_channel_access  where user_id= ?)';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute([$id_channel, $id_user]);
    return $recipesStatement->fetch(PDO::FETCH_ASSOC);
  }

}
