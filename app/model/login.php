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
}