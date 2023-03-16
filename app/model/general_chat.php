<?php
require_once('model_base.php');

class general_chat extends modelBase {

  public function getAllMessage() {

    $sqlQuery = 'SELECT * FROM message';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute();
    return $recipesStatement->fetchAll();
  }

  public function getMessageUserChanel($chanel_id) {
    $sqlQuery = 'SELECT message.text, user.nickname, message.user_id FROM message join user on user_id=user.id where message.channel_id=:chanel_id';

    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute([
      'chanel_id' => $chanel_id
    ]);
    return $recipesStatement->fetchAll();
  }
}