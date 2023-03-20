<?php
class modelBase {

  public $db;

  function __construct() {
    try {
      $this->db = new PDO('mysql:host=localhost:3310;dbname=ffc;charset=utf8', 'user', 'user');
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function addNewMessage(string $text, int $id_chanel, int $id_user ) {
    $sqlQuery = 'INSERT INTO `message` (`text`, `channel_id`, `user_id`) VALUES (?, ?, ?)';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute([$text, $id_chanel, $id_user]);
  }
}