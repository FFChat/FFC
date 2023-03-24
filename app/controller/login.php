<?php
require_once('../model/login.php');
$mod = new login();

function compteCreate() {
  global $mod;
  $name = htmlspecialchars($_POST['name']);
  $mdp = htmlspecialchars($_POST['mdp']);
  $email = htmlspecialchars($_POST['email']);

  $mod->addUser($name, $mdp, $email);

  $return['success'] = 1;
  $return['msg'] = 'le compte crée avec seccès !';
  echo(json_encode($return));
}

function compteLogin() {
  session_start();
  global $mod;
  $name = htmlspecialchars($_POST['name']);
  $mdp = htmlspecialchars($_POST['mdp']);
  $user = $mod->loginUser($name, $mdp);

  if($user) {
    $return['success'] = 1;
    // $return['user'] = $user['id'];
    $return['msg'] = 'Login...';
    $_SESSION['nickname'] = $user['nickname'];
    $_SESSION['id'] = $user['id'];
    $_SESSION['logged'] = TRUE;
    echo(json_encode($return));
  } else {
    $return['success'] = 0;
    $return['msg'] = 'Nom d\'utilisateur ou mot de passe introuvable';
    echo(json_encode($return));
  }


}