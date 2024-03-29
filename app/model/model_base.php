<?php
class modelBase {

  public $db;

  function __construct() {
    try {
      $this->db = new PDO(getenv('databaseLog.IP'), getenv('databaseLog.userName'), getenv('databaseLog.password'));
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function addNewMessage(string $text, int $id_chanel, int $id_user ) {
    $sqlQuery = 'INSERT INTO `message` (`text`, `channel_id`, `user_id`) VALUES (?, ?, ?)';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute([$text, $id_chanel, $id_user]);
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