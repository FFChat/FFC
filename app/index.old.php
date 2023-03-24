<?php

// routes

$page = '';

// if(!isset($_GET['page']) || empty($_GET['page'])) {
//   die('ui');
// }

// if(!isset($_SESSION)) {
//   require_once('page/login-signin.php');
//   die;
// }

if(!isset($_GET['page']) || empty($_GET['page'])) {
  require_once('page/home.php');
}


switch($_GET['page']) {
  case 'home':
    loadPage('home');
    break;
  case 'general':
    loadPage('general_chat', 'General');
    break;
  case 'login':
    loadPage('login', 'Login');
    break;
}

function loadPage($page = NULL, $nom = 'Unamed') {
  require_once('templates/header.php');
  require_once('model/'. $page . '.php');
  require_once('controller/'. $page . '.php');
  require_once('page/'. $page . '.php');
  require_once('templates/footer.php');
}