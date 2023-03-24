<?php
require_once('model_base.php');

class login extends modelBase {

  function addUser($name, $mdp, $email) {

    $sqlQuery = 'INSERT INTO `user` (`nickname`, `password`, `email`) VALUES (?, ?, ?)';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute([$name, $mdp, $email]);
  }

  function loginUser($name, $mdp) {
    $sqlQuery = 'SELECT id, nickname FROM `user` WHERE nickname = ? AND password = ?';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute([$name, $mdp]);
    return $recipesStatement->fetch(PDO::FETCH_ASSOC);
  }

  public function logStatusTrue($id){
    $sqlQuery = 'UPDATE user SET logged_php = CURRENT_TIMESTAMP WHERE id = ?';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute([$id]);
  }

  public function logIn12H($id) {
    $sqlQuery = 'SELECT logged_php FROM `user` WHERE id = ? AND WHERE logged_php > DATE_SUB(NOW(), INTERVAL 12 HOUR)';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute([$id]);
    return $recipesStatement->fetch(PDO::FETCH_ASSOC);
  }

  public function logJSTrue($id){
    $sqlQuery = 'UPDATE user SET logged_js = 1 WHERE id = ?';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute([$id]);
  }

  public function isLogJS($id) {
  $sqlQuery = 'SELECT logged_js FROM `user` WHERE id = ? AND WHERE logged_js = 1';
  $recipesStatement = $this->db->prepare($sqlQuery);
  $recipesStatement->execute([$id]);
  return $recipesStatement->fetch(PDO::FETCH_ASSOC);
  }

  public function logoutJS($id){
    $sqlQuery = 'UPDATE user SET logged_js = 0 WHERE id = ?';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute([$id]);
  }

  public function getUserInfo($id) {
    $sqlQuery = 'SELECT nickname FROM `user` WHERE id = ?';
    $recipesStatement = $this->db->prepare($sqlQuery);
    $recipesStatement->execute([$id]);
    return $recipesStatement->fetch(PDO::FETCH_ASSOC);
  }
}